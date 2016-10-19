;(function ($, window, document, undefined) {
    var pluginName = "faq";
    var defaults = {};

    function Plugin(element, options) {
        var _this = this;
        this.element = $(element);
        this.items = {};
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {
        init: function () {
            var _this = this;
            var hash = window.location.hash;
            hash && $('ul a[href=\"' + hash + '\"]').tab('show');
            $('ul li a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                window.location.hash = this.hash;
                $('html,body').scrollTop(scrollmem);
            });
            $('.panel-body-content a[href^="#"]').click(function (e) {
                var id = this.getAttribute('href');
                var se = $(id).prev().get(0);
                $(id).collapse('show');
                $(id).parents('.collapse').each(function (i, elem) {
                    $(elem).collapse('show');
                });
            });
        }
    };

    $.fn[pluginName] = function (options) {
        if (!$(this).data("plugin_" + pluginName)) {
            $(this).data("plugin_" + pluginName, new Plugin(this, options));
        }

        return $(this).data("plugin_" + pluginName);
    };
})(jQuery, window, document);
