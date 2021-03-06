<?php $this->Html->css('experiments/word_coalesce', ['block' => 'css']); ?>
<?php $this->Html->script('experiments/word_coalesce.js', ['block' => 'script_bottom']); ?>

<?= $this->element('Experiments/back') ?>

<h1>
    Experiment #1: Word Coalesce
</h1>

<p>
    Click on any of the following words to see adjacent matching letters merge into it.
    <button id="reset" class="btn btn-default btn-sm">
        Reset
    </button>
</p>

<?php
    $quote =
        'As the Knight sang the last words of the ballad, he gathered up the reins, and turned his horse\'s ' .
        'head along the road by which they had come. "You\'ve only a few yards to go," he said, "down the hill and ' .
        'over that little brook, and then you\'ll be a Queen – -But you\'ll stay and see me off first?" he added as ' .
        'Alice turned with an eager look in the direction to which he pointed. "I shan\'t be long. You\'ll wait and ' .
        'wave your handkerchief when I get to that turn in the road? I think it\'ll encourage me, you see."';
    $words = explode(' ', $quote);
?>

<div id="word-coalesce">
    <?php foreach ($words as $word): ?>
        <a href="#" data-word="<?= $word ?>"><?= $word ?></a>
    <?php endforeach; ?>
</div>

<section id="source">
    <h2>
        Source
    </h2>
    <ul>
        <li>
            <button>
                PHP / HTML
            </button>
            <pre><?= htmlentities(
                    "\$quote = '...';\n" .
                    "\$words = explode(' ', \$quote);\n" .
                    "<div id=\"word-coalesce\">\n" .
                    "\t<?php foreach (\$words as \$word): ?>\n" .
                    "\t\t<a href=\"#\" data-word=\"<?= \$word ?>\"><?= \$word ?></a>\n" .
                    "\t<?php endforeach; ?>\n" .
                    "</div>"
                ) ?></pre>
        </li>
        <li>
            <button>
                Javascript
            </button>
            <pre><?php
                $path = WWW_ROOT . 'js' . DS . 'experiments' . DS . 'word_coalesce.js';
                echo htmlentities(file_get_contents($path));
                ?></pre>
        </li>
        <li>
            <button>
                CSS
            </button>
            <pre><?php
                $path = WWW_ROOT . 'css' . DS . 'experiments' . DS . 'word_coalesce.css';
                echo htmlentities(file_get_contents($path));
                ?></pre>
        </li>
    </ul>
</section>

<?php $this->append('buffered'); ?>
    wordCoalesce.init();
<?php $this->end(); ?>
