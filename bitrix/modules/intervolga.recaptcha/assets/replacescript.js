(function () {
	/**
	 * Возвращает родительскую форму, если она есть и явлется непосредственным предком вершины
	 * @param {HTMLElement} childNode родительская вершина
	 * @returns {null|HTMLElement} форма или null
	 */
	var getFormNode = function (childNode) {
		var c = childNode;
		while (c) {
			c = c.parentNode;
			if (c.nodeName.toLowerCase() === 'form') {
				return c;
			}
		}
		return null;
	};

	/**
	 * Осуществляет поиск по селектору input[name=captcha_word] или *[name=captcha_word],
	 * если родительский элемент не указан
	 * @param {HTMLElement|null} parentNode родительская вершина или null, если не нужна
	 * @returns {HTMLElement[]} список элементов
	 */
	var getCaptchaWords = function (parentNode) {
		var captchaWords = [];

		var inputs = null;
		var hasParentNode = false;
		if (typeof parentNode !== "undefined") {
			hasParentNode = parentNode !== null;
		}
		if (hasParentNode) {
			inputs = parentNode.getElementsByTagName('input');
		} else {
			inputs = document.getElementsByName('captcha_word');
		}
		for (var i = 0; i < inputs.length; i++) {
			if (inputs[i].name === 'captcha_word') {
				captchaWords.push(inputs[i]);
			}
		}

		return captchaWords;
	};

	/**
	 * Осуществляет поиск дочерних картинок стандартной капчи Bitrix.
	 * @param {HTMLElement} parentNode родительская вершина
	 * @returns {HTMLElement[]} картинки капчи
	 */
	var getCaptchaImages = function (parentNode) {
		var captchaImages = [];

		var images = parentNode.getElementsByTagName('img');
		for (var i = 0; i < images.length; i++) {
			if (/\/bitrix\/tools\/captcha.php\?(captcha_code|captcha_sid)=[^>]*?/i.test(images[i].src)
				// Иногда Bitrix ставит src капче уже после того, как страница пргрузитлась
				// это никак не отловить,  поэтому проверяем только id
				|| (images[i].id === "captcha")) {
				captchaImages.push(images[i]);
			}
		}

		return captchaImages;
	};

	/**
	 * Возвращаеn список всех форм (form) с битриксовой captcha
	 * @returns {HTMLElement[]}
	 */
	var getFormsWithCaptcha = function() {
		var fromDocument = null;
		var captchaWordFields = getCaptchaWords(fromDocument);
		if (captchaWordFields.length === 0) {
			return [];
		}

		var forms = [];
		for (var i = 0; i < captchaWordFields.length; i++) {
			var f = getFormNode(captchaWordFields[i]);
			if (null !== f) {
				forms.push(f);
			}
		}
		return forms;
	};

	/**
	 * Заменяет поле ввода капчи на поле ввода ReCAPTCHA
	 * @param {HTMLElement} captchaWord поле ввода капчи (*[name=captcha_word])
	 */
	var replaceCaptchaWordWithReCAPTCHAField = function(captchaWord) {
		// Генерируем уникальный id элемента
		var recaptchaId = 'recaptcha-dynamic-' + (new Date()).getTime();
		if (document.getElementById(recaptchaId) !== null) {
			var elementExists = false;
			var additionalIdParameter = null;
			var maxRandomValue = 65535;
			do {
				additionalIdParameter = Math.floor(Math.random() * maxRandomValue);
				elementExists = (document.getElementById(recaptchaId + additionalIdParameter) !== null);
			} while(elementExists);
			recaptchaId += additionalIdParameter;
		}

		var cwReplacement = document.createElement('div');
		cwReplacement['id'] = recaptchaId;
		cwReplacement['className'] = 'g-recaptcha';
		cwReplacement['attributes']['data-sitekey'] = window.globalRecaptcha.key;

		captchaWord.parentNode.replaceChild(cwReplacement, captchaWord);
		renderRecaptchaById(recaptchaId);
	};

	/**
	 * Скрывает картинку капчи, заменяя изображение
	 * @param {HTMLImageElement} captchaImage картинка капчи
	 */
	var hideCaptchaImage = function(captchaImage) {
		var srcValue = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
		captchaImage['attributes']['src'] = srcValue;
		captchaImage['style']['display'] = 'none';
		if ('src' in captchaImage) {
			captchaImage.src = srcValue;
		}
	};

	/**
	 * Заменяет сообщения на сообщения ReCAPTCHA в форме
	 * @param {HTMLElement} form форма из которой извлекаются родительские элементы
	 */
	var replaceCaptchaHintMessagesWithReCAPTCHAHintMessages = function(form) {
		var textContentOfNodeIsCaptchaVariation = function(e) {
			var getTextContent = function(e) {
				if (typeof e.textContent === "string") {
					// Убираем лишние символы, чтобы сравнить всё точно
					return e.textContent.replace(/^[ \t\r\n]|[ \t\r\n]$/g, '');
				}
				return "";
			};
			var possibleCaptchaMessages =  {
				'*Введите слово на картинке' : true,
				'Код подтверждения (символы на картинке)': true
			};
			var content = getTextContent(e);
			return possibleCaptchaMessages.hasOwnProperty(content);
		};
		var formChildren = form.querySelectorAll('*');
		var recaptchaMessage = 'Подтвердите, что вы не робот';
		for (var i = 0; i < formChildren.length; i++)
		{
			var formChild = formChildren[i];
			if (textContentOfNodeIsCaptchaVariation(formChild))
			{
				for (var j = 0; j < formChild.childNodes.length; j++)
				{
					var child = formChild.childNodes[j];
					if (textContentOfNodeIsCaptchaVariation(child))
					{
						child.innerHTML = recaptchaMessage;
						if (child instanceof Text) {
							child.textContent = recaptchaMessage;
						}
						break;
					}
				}
			}
		}
	};

	/**
	 * Ищет и заменяет капчу Bitrix на ReCAPTCHA во всех формах
	 */
	var findAndReplaceBitrixCaptchaWithReCAPTCHA = function() {
		var forms = getFormsWithCaptcha();
		var j;
		for (var i = 0; i < forms.length; i++) {
			var form = forms[i];
			var captchaWords = getCaptchaWords(form);
			if (captchaWords.length === 0) {
				continue;
			}

			var captchaImages = getCaptchaImages(form);
			if (captchaImages.length === 0) {
				continue;
			}
			for(j = 0; j < captchaWords.length; j++) {
				replaceCaptchaWordWithReCAPTCHAField(captchaWords[j]);
			}
			for(j = 0; j < captchaImages.length; j++) {
				hideCaptchaImage(captchaImages[j]);
			}
			replaceCaptchaHintMessagesWithReCAPTCHAHintMessages(form);
		}
	};

	/**
	 * Заполняет пустые поля ReCAPTHA, если они пришли с сервера позже, чем
	 * прогрузилась страница и из-за этого не заполнены
	 */
	var fillEmptyReCAPTCHAFieldsIfLoaded = function() {
		// Если мы не можем рендерить поля, значит рекаптча либо скоро прогрузится, либо что-то ещё
		// а если можем то пройдемся по пустым полям
		if (typeof renderRecaptchaById !== "undefined") {
			var elements = document.getElementsByClassName('g-recaptcha');
			for(var i = 0; i < elements.length; i++) {
				var element = elements[i];
				if (element.innerHTML.length === 0) {
					var id = element.id;
					if (typeof id === "string") {
						if (id.length !== 0) {
							renderRecaptchaById(id);
						}
					}
				}
			}
		}
	};

	/**
	 * Общий обработчик замены капчи на ReCAPTCHA
	 * @returns {boolean}
	 */
	var captchaHandler = function () {
		try {
			fillEmptyReCAPTCHAFieldsIfLoaded();

			if (!window.renderRecaptchaById || !window.globalRecaptcha || !window.globalRecaptcha.key) {
				console.error('Module intervolga.recaptcha was not loaded correctly');
				return true;
			}

			findAndReplaceBitrixCaptchaWithReCAPTCHA();
			return true;
		} catch (e) {
			console.error(e);
			return true;
		}
	};

	if (!!document.addEventListener) {
		document.addEventListener('DOMNodeInserted', captchaHandler, false);
	} else {
		console.warn('Your browser does not support dynamic ReCaptcha replacement');
	}
})();