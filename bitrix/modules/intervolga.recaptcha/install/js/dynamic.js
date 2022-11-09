(function () {
    if (!window['recaptchaOptions'] || !window['recaptchaOptions'].key) {
        throw new Error('intervolga.recaptcha options not found');
    }


    /**
     * Генерация throttle-обертки для уменьшения частоты вызова
     * callback-функции
     *
     * @param {int} delay
     * @param {Function} callback
     * @return {Function}
     */
    var throttle = function (delay, callback) {
        // After wrapper has stopped being called, this timeout ensures that
        // `callback` is executed at the proper times
        var timeoutID;

        // Keep track of the last time `callback` was executed.
        var lastExec = 0;

        // The `wrapper` function encapsulates all of the throttling
        // functionality and when executed will limit the rate at which
        // `callback` is executed.
        return function () {
            var self = this;
            var elapsed = Number(new Date()) - lastExec;
            var args = arguments;

            // Execute `callback` and update the `lastExec` timestamp.
            function exec() {
                lastExec = Number(new Date());
                callback.apply(self, args);
            }

            // Clear any existing timeout.
            if (timeoutID) {
                clearTimeout(timeoutID);
            }

            if (elapsed > delay) {
                // If `delay` time has been exceeded, execute `callback`.
                exec();
            } else {
                // Since `delay` time has not been exceeded, schedule `callback`
                // to execute `delay` ms after most recent execution.
                timeoutID = setTimeout(exec, delay - elapsed);
            }

        };
    };


    /**
     * Прячем исходные картинки с капчами
     *
     * @type {Function}
     */
    var replaceCaptchaImages = function () {
        var images = document.body.querySelectorAll('form img');
        var src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

        for (var i = 0; i < images.length; i++) {
            var img = images[i];

            if (/\/bitrix\/tools\/captcha\.php\?(captcha_code|captcha_sid)=[0-9a-z]+/i.test(img.src)) {
                // Sometimes Bitrix set "src" after page loaded
                // and there is no workaround, so we check id directly
                // || (
                //     img.id === "captcha" && NOT REPLACED YET
                // )
                img['attributes']['src'] = src;
                delete img['attributes']['width'];
                delete img['attributes']['height'];
                img['style']['display'] = 'none';
            }
        }
    };


    var replaceCaptchaInputs = function () {
        var inputs = document.querySelectorAll('form input[name="captcha_word"]');

        for (var i = 0; i < inputs.length; i++) {
            var inp = inputs[i];

            if ('hidden' === inp.type) {
                continue;
            }

            var additionalIdPart = Math.floor(Math.random() * 65535);
            var recaptchaId = 'recaptcha-dynamic-' + (new Date()).getTime() + '-' + additionalIdPart;

            var replacement = document.createElement('div');
            replacement['id'] = recaptchaId;
            replacement['className'] = 'g-recaptcha';

            inp.parentNode.replaceChild(replacement, inp);
            renderRecaptchaById(recaptchaId);
        }
    };


    /**
     * Динамическая замена каптчи на reCAPTCHA
     *
     * @type {Function}
     */
    var replaceCaptcha = function () {
        replaceCaptchaImages();
        replaceCaptchaInputs();
    };

    /**
     * IE8 сотоварищи идут лесом, т.к. в них все равно не поддерживается даже
     * fallback-событие DOMNodeInserted
     */
    if (!document.addEventListener) {
        console.warn('Your browser is too old. ' +
            'Dynamic ReCaptcha replacement will be disabled.');
        return;
    }

    /**
     * Переинициализация reCAPCTHA
     */
    var reInitReCaptcha = function () {
        var $arReCaptcha = document.getElementsByClassName('g-recaptcha');
        for (var i = 0; i < $arReCaptcha.length; ++i) {
            renderRecaptchaById($arReCaptcha[i].id);
        }
    };

    /**
     * Если с браузером все в порядке, обрабатываем все что появилось на
     * странице до DOMContentLoaded и ...
     * [лучше] запускаем MutationObserver
     * [хуже] вешаемся на событие DOMNodeInserted
     */
    document.addEventListener("DOMContentLoaded", function () {
        /**
         * Обрабатываем событие Битриксового ajax (компоненты с AJAX_MODE = Y)
         */
        BX.addCustomEvent('onAjaxSuccess', reInitReCaptcha);

        replaceCaptcha();

        var MutationObserver = window.MutationObserver
            || window.WebKitMutationObserver
            || window.MozMutationObserver;

        if (!!MutationObserver) {
            var observer = new MutationObserver(throttle(100, replaceCaptcha));
            observer.observe(document.body, {childList: true, subtree: true});
        } else {
            document.addEventListener('DOMNodeInserted', throttle(100, replaceCaptcha));
        }
    });
})();
