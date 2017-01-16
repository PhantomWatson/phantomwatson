/**
 * A test of the following effect:
 * User clicks on a link and the letters in all sibling links
 * float and merge into the clicked link
 *
 * @type {{init: wordCoalesceTest.init}}
 */
var wordCoalesce = {
    init: function () {
        var words = $('#test-words a');
        words.each(function () {
            var link = $(this);
            var word = link.html();
            var letters = word.split('');
            link.html('');
            for (var i = 0; i < letters.length; i++) {
                link.append('<span>' + letters[i] + '</span>');
            }
        });
        words.click(function (event) {
            event.preventDefault();
            var clickedWord = $(this);

            // Break up all receiver letters
            var receiverLetters = clickedWord.find('span');
            var receiverLettersString = [];
            receiverLetters.each(function () {
                receiverLettersString.push($(this).html());
            });

            // Transform all other words into individual letters
            $('#test-words a[data-word!=' + $(this).data('word') + ']').each(function () {
                var senderWord = $(this);
                var senderLetters = senderWord.find('span');

                // Copy letters to outside of link
                senderLetters.each(function () {
                    var originalLetter = $(this);
                    var letterClone = $(this).clone();
                    letterClone.css({
                        zIndex: 2,
                        position: 'absolute'
                    });
                    letterClone.addClass('clone');
                    originalLetter.before(letterClone);
                    originalLetter.css({opacity: 0});
                });

                senderLetters = senderWord.find('span.clone');
                senderLetters.each(function () {
                    var senderLetter = $(this);

                    // Fade out letters that will not be moved
                    if (receiverLettersString.indexOf(senderLetter.html()) == -1) {
                        senderLetter.animate({
                            opacity: 0
                        }, 2000);
                        return;
                    }

                    // Find a receiver letter to move this sender letter to
                    receiverLetters.each(function () {
                        receiverLetter = $(this);
                        if (receiverLetter.html() != senderLetter.html()) {
                            return;
                        }

                        senderLetter.animate({
                            left: receiverLetter.position().left,
                            top: receiverLetter.position().top
                        }, 3000, 'swing', function () {
                            $(this).fadeOut(200, function () {
                                $(this).remove();
                            });
                        });

                        // Break out of loop early to prevent moving a
                        // sender letter to multiple receiver letters
                        return false;
                    });
                });
            });
        });
    }
};
