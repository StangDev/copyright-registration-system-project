!function(window, document, $) { "use strict";
    var defaults = {
        title: "PlayKit",
        version: '1.0.1',
        navbar: {
            type: 'light',
            skin: 'bg-faded'
        },
        menubar: {
            type: 'inverse',
            skin: 'bg-primary',
            folded: false,
            top: false
        }
    };

    $.settings = {
        defaults: defaults || {},
        current: null,
        storageKey: 'PlayKit_Settings_Key',
        storage: window.localStorage,
        init: function() {
            if (!this.isStored()) {
                this.current = this.defaults,
                this.storage.setItem(this.storageKey, this._stringify(this.current));
            }

            // the current settings = the stored settings
            this.current = this.retrive();
        },
        isStored: function() {
            return this.storage.hasOwnProperty(this.storageKey) && !$.isEmptyObject(this.retrive());
        },
        retrive: function() {
            return this._parse(this.storage.getItem(this.storageKey));
        },
        clear: function() {
            return this.storage.clear(), this;
        },
        save: function() {
            return this.storage.setItem(this.storageKey, this._stringify(this.current)), this;
        },
        get: function(key) {
            return this.current[key];
        },
        set: function(key, value) {
            if (typeof this.current[key] === "object" && typeof value === "object") {
                $.extend(this.current[key], value);
            } else {
                this.current[key] = value;
            }
            return this;
        },
        extend: function(settings) {
            return typeof settings === 'object' && $.extend(true, this.defaults, settings), this;
        },
        _parse: function(input) {
            return typeof input === "string" ? JSON.parse(input) : void 0;
        },
        _stringify: function(input) {
            return JSON.stringify(input);
        }
    };
}(window, document, jQuery);
