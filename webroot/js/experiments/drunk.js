var drunk = {
    wobbliesTilt: null,
    wobbliesScale: null,
    level: 0,

    init: function () {
        $('#content').wrapInner('<div id="wrapper-tilt"></div>');
        $('#wrapper-tilt').wrapInner('<div id="wrapper-scale"></div>');

        drunk.level = $('#drunk-level').val();

        $('#disable-drunk').hide();

        $('#enable-drunk').click(function (event) {
            drunk.startWobblies();
            drunk.enableBlurries();
            $('#disable-drunk').show();
            $('#enable-drunk').hide();
        });
        $('#disable-drunk').click(function (event) {
            drunk.stopWobblies();
            drunk.disableBlurries();
            $('#disable-drunk').hide();
            $('#enable-drunk').show();
        });
        $('#drunk-level').change(function () {
            drunk.level = $(this).val();
            drunk.setBlurries();
        });
    },

    startWobblies: function () {
        $('html').addClass('wobblies-enabled');

        var delay = 500 + (Math.random() * 5000);
        setTimeout('drunk.switchDrunkTilt(' + drunk.level + ')', delay);

        var delay = 500 + (Math.random() * 3000);
        setTimeout('drunk.switchDrunkScale(' + drunk.level + ')', delay);
    },

    stopWobblies: function () {
        $('html').removeClass('wobblies-enabled');

        // Clear tilt
        if (this.wobbliesTilt) {
            clearTimeout(this.wobbliesTilt);
        }
        $('#wrapper-tilt').addClass('stop-wobblies');

        // Clear scale
        if (this.wobbliesScale) {
            clearTimeout(this.wobbliesScale);
        }
        $('#wrapper-scale').addClass('stop-wobblies');
    },

    enableBlurries: function () {
        $('html').addClass('blurries-enabled');
        this.setBlurries();
    },
    
    setBlurries: function () {
        $('body').removeClass();
        $('body').addClass('drunk-text-' + drunk.level);
    },

    disableBlurries: function () {
        $('html').removeClass('blurries-enabled');
    },

    switchDrunkTilt: function () {
        var wrapper = $('#wrapper-tilt');
        var classA = 'drunk-tilt-' + drunk.level + 'a';
        var classB = 'drunk-tilt-' + drunk.level + 'b';
        if (wrapper.hasClass(classA)) {
            wrapper.removeClass(classA);
            wrapper.addClass(classB);
        } else {
            wrapper.removeClass(classB);
            wrapper.addClass(classA);
        }
        var delay = 8000 + (Math.random() * 5000);
        this.wobbliesTilt = setTimeout('drunk.switchDrunkTilt(' + drunk.level + ')', delay);
    },

    switchDrunkScale: function () {
        var wrapper = $('#wrapper-scale');

        var maxScaleLevel = Math.floor(drunk.level / 2) - 1;
        var scaleLevel = this.randomFromTo(0, maxScaleLevel);
        var negative = (Math.random() < .5);
        var newClass = 'drunk-scale-';
        if (negative && scaleLevel > 0) {
            newClass += 'n';
        }
        newClass += scaleLevel;
        wrapper.removeClass();
        wrapper.addClass(newClass);
        var delay = 5000 + (Math.random() * 8000);
        this.wobbliesScale = setTimeout('drunk.switchDrunkScale(' + drunk.level + ')', delay);
    },

    randomFromTo: function(from, to) {
        return Math.floor(Math.random() * (to - from + 1) + from);
    }
};
