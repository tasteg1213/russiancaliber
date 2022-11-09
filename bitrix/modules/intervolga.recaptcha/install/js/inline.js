(function(window, document, scriptTag, renderFunciton, options) {
    if (!window[options] || !window[options].key) {
        throw new Error('intervolga.recaptcha options not found');
    }

    window.onRecaptchaSdkLoaded = function() {
        window[renderFunciton].args = window[renderFunciton].args || [];
        for (var i = 0; i < window[renderFunciton].args.length; i++) {
            var recaptchaId = window[renderFunciton].args[i][0];
            realRenderRecaptchaById(recaptchaId);
        }

        window[renderFunciton] = function(id) {
            realRenderRecaptchaById(id);
        };
    };

    function realRenderRecaptchaById(id) {
        var recaptchaElement = document.getElementById(id);
        if (!recaptchaElement) {
            return;
        }
        if (recaptchaElement.className.indexOf('g-recaptcha') < 0) {
            return;
        }
        if (!!recaptchaElement.children.length) {
            return;
        }

        grecaptcha.render(id, {
            'sitekey': window[options].key + '',
            'theme': window[options].theme + '',
            'size': window[options].size + '',
            'type': window[options].type + ''
        });
    }


    window[renderFunciton] = window[renderFunciton] ||
        function() {
            window[renderFunciton].args = window[renderFunciton].args || [];
            window[renderFunciton].args.push(arguments);

            // Load reCAPTCHA SDK if it does not exist on page
            var recaptchaScriptId = 'recaptchaApiLoader';
            if (document.getElementById(recaptchaScriptId)) {
                return;
            }

            var recaptchaScript = document.createElement(scriptTag);
            recaptchaScript.id = recaptchaScriptId;
            recaptchaScript.async = true;
            recaptchaScript.src = '//www.google.com/recaptcha/api.js?hl=' +
                window[options].lang +
                '&onload=onRecaptchaSdkLoaded&render=explicit';
            document.head.appendChild(recaptchaScript);
        };
})(window, document, 'script', 'renderRecaptchaById', 'recaptchaOptions');