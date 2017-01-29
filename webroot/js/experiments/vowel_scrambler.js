var vowelScrambler = {
    init: function () {
        $('#scramble').click(function () {
            var input = $('#input');
            var originalText = input.val();
            var scrambledText = vowelScrambler.scrambleString(originalText);
            input.val(scrambledText);
        });
    },

    /**
     * Changes all of the vowels in the provided string
     *
     * @param string
     * @returns string
     */
    scrambleString: function (string) {
        var scrambled = [];
        for (var i = 0, length = string.length; i < length; i++) {
            scrambled.push(this.scrambleLetter(string[i]));
        }
        return scrambled.join('');
    },

    /**
     * Scrambles a single vowel (or returns the consonant given to it)
     *
     * @param letter
     * @return string
     */
    scrambleLetter: function (letter) {
        var vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
        if (vowels.indexOf(letter.toLowerCase()) == -1) {
            return letter;
        }
        for (var i = 0, length = vowels.length; i < length; i++) {
            if (letter.toLowerCase() == vowels[i]) {
                vowels.splice(i, 1);
            }
        }

        // Lowercase
        if (letter == letter.toLowerCase()) {
            return vowels[Math.floor(Math.random() * vowels.length)];
        }

        // Uppercase
        return vowels[Math.floor(Math.random() * vowels.length)].toUpperCase();
    }
};
