var WordCounterHelper = (function () {
    function updateWordCount(textarea, wordCountDisplay) {
        let text = textarea.val();

        // Match words and count spaces explicitly
        let words = text.match(/\S+/g) || [];  // Matches non-space sequences (words)
        let spaces = (text.match(/\s/g) || []).length; // Matches all spaces

        let wordCount = words.length + spaces;

        wordCountDisplay.text('Word count: ' + wordCount);

        if (wordCount > 2500) {
            wordCountDisplay.addClass('text-danger');
        } else {
            wordCountDisplay.removeClass('text-danger');
        }
    }

    function countTotalWords(wordCountSelectors, totalDisplay) {
        let totalWordsSum = 0;

        wordCountSelectors.each(function () {
            let wordCount = parseInt($(this).text().replace(/\D+/g, ''), 10) || 0;
            totalWordsSum += wordCount;
        });

        totalDisplay.html(totalWordsSum);

        if (totalWordsSum > 2500) {
            totalDisplay.closest('div').addClass('text-danger');
        } else {
            totalDisplay.closest('div').removeClass('text-danger');
        }
    }

    function runCounter(textareaSelector, wordCountSelector, totalWordCountSelector) {
        $(textareaSelector).off('input keydown').on('input keydown', function (event) {
            let textarea = $(this);
            let wordCountDisplay = textarea.siblings(wordCountSelector);

            // Only count words when input changes OR when space is pressed
            if (event.type === 'input' || event.key === ' ') {
                updateWordCount(textarea, wordCountDisplay);
                countTotalWords($(wordCountSelector), $(totalWordCountSelector));
            }
        });
    }

    return {
        init: runCounter,
        updateWordCount: updateWordCount,
        countTotalWords: countTotalWords
    };
})();
