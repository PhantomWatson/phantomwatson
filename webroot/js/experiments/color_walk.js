var colorWalk = {
    element: null,
    red: null,
    green: null,
    blue: null,
    interval: 100,

    init: function (element) {
        this.element = $(element);
        var color = this.element.css('background-color');
        var parts = color.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
        this.red = parseInt(parts[1], 16);
        this.green = parseInt(parts[2], 16);
        this.blue = parseInt(parts[3], 16);
        this.changeBgColor();
    },

    changeBgColor: function () {
        setTimeout(function () {
            colorWalk.adjustColor();
            colorWalk.element.css('background-color', colorWalk.getHexColor());
            $('#current-color').html(colorWalk.getHexColor());
            colorWalk.changeBgColor();
        }, this.getInterval());
    },

    getInterval: function () {
        return $('#interval').val();
    },

    getMinAdjustment: function () {
        return $('#min-adjustment').val();
    },

    getMaxAdjustment: function () {
        return $('#max-adjustment').val();
    },

    getHexColor: function () {
        var retval = '#';
        retval += ('0' + this.red.toString(16)).slice(-2);
        retval += ('0' + this.green.toString(16)).slice(-2);
        retval += ('0' + this.blue.toString(16)).slice(-2);
        return retval;
    },

    adjustColor: function () {
        var maxAdjustment = this.getMaxAdjustment();
        var minAdjustment = this.getMinAdjustment();

        var adjustment = Math.floor(Math.random() * maxAdjustment);
        adjustment = Math.min(adjustment, maxAdjustment);
        adjustment = Math.max(adjustment, minAdjustment);
        adjustment *= Math.round(Math.random()) === 0 ? -1 : 1;

        var colors = ['red', 'green', 'blue'];
        var targetColor = colors[Math.floor(Math.random() * 3)];
        this[targetColor] += adjustment;
        this[targetColor] = Math.min(this[targetColor], 255);
        this[targetColor] = Math.max(this[targetColor], 0);
    }
};
