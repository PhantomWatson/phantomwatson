var ghostMessages = {
    init: function () {
        $('#start').click(function () {
            ghostMessages.addInput();
            ghostMessages.disableInput();
            // 100ms delay helps ensure that fade-in transition is shown
            setTimeout(function () {
                ghostMessages.cycle();
            }, 100);
        });
        $('#speed').change(function () {
            ghostMessages.updateSpeed();
        });
        this.enableInput();
        this.updateSpeed();
    },

    addInput: function () {
        var list = $('#ghost-messages');
        var input = $('#input').val();
        var words = input.split(' ');
        for (var i = 0; i < words.length; i++) {
            if (words[i] != '') {
                list.append('<li>' + words[i] + '</li>');
            }
        }
        $('#input').val('');
    },

    enableInput: function () {
        $('#start').html("Get ghosty").prop('disabled', false);
    },

    disableInput: function () {
        $('#start').html("Ghostin'...").prop('disabled', true);
    },

    cycle: function () {
        var inTransitionLength = this.getFadeInDuration();
        var outTransitionLength = this.getFadeOutDuration();
        if ($('#ghost-messages li').length === 0) {
            this.enableInput();
            return;
        }
        this.showWord();
        setTimeout(function () {
            ghostMessages.hideWord();
            setTimeout(function () {
                ghostMessages.removeWord();
                // 100ms delay helps ensure that fade-in transition is shown
                setTimeout(function () {
                    ghostMessages.cycle();
                }, 100);
            }, outTransitionLength);
        }, inTransitionLength);
    },

    showWord: function () {
        $('#ghost-messages li:first-child').addClass('fade-in');
    },

    hideWord: function () {
        $('#ghost-messages li:first-child').removeClass('fade-in').addClass('fade-out');
    },

    removeWord: function () {
        $('#ghost-messages li:first-child').remove();
    },

    getFadeOutDuration: function () {
        var totalDuration = this.getTotalTransitionDuration();
        return Math.round(totalDuration / 4);
    },

    getFadeInDuration: function () {
        var totalDuration = this.getTotalTransitionDuration();
        return Math.round(totalDuration * (3 / 4));
    },

    getSpeed: function () {
        var speeds = [
            'speed-absurdly-slow',
            'speed-very-slow',
            'speed-slow',
            'speed-normal',
            'speed-fast',
            'speed-very-fast',
            'speed-hyperspeed'
        ];
        for (var i = 0; i < speeds.length; i++) {
            if ($('#ghost-messages').hasClass(speeds[i])) {
                return speeds[i];
            }
        }

        return false;
    },

    getTotalTransitionDuration: function () {
        var speed = this.getSpeed();
        switch (speed) {
            case 'speed-absurdly-slow':
                return 32000;
            case 'speed-very-slow':
                return 16000;
            case 'speed-slow':
                return 8000;
            case 'speed-normal':
                return 4000;
            case 'speed-fast':
                return 2000;
            case 'speed-very-fast':
                return 1000;
            case 'speed-hyperspeed':
                return 500;
        }

        return 0;
    },

    updateSpeed: function () {
        var currentSpeed = this.getSpeed();
        $('#ghost-messages')
            .removeClass(currentSpeed)
            .addClass('speed-' + $('#speed').val());
    }
};
