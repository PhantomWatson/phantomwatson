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
        this.enableInput();
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
        var inTransitionLength = 3000;
        var outTransitionLength = 1000;
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
    }
};
