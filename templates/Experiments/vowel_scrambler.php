<?php $this->Html->css('experiments/vowel_scrambler', ['block' => 'css']); ?>
<?php $this->Html->script('experiments/vowel_scrambler', ['block' => 'script_bottom']); ?>

<?= $this->element('Experiments/back') ?>

<h1>
    Experiment #4: Vowel Scrambler
</h1>

<?= $this->element('Experiments/vowel_scrambler') ?>

<section id="source">
    <h2>
        Source
    </h2>
    <ul>
        <li>
            <button>
                PHP / HTML
            </button>
            <pre><?php
                $path = APP . 'Template' . DS . 'Element' . DS . 'Experiments' . DS . 'vowel_scrambler.ctp';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                Javascript
            </button>
            <pre><?php
                $path = WWW_ROOT . 'js' . DS . 'experiments' . DS . 'vowel_scrambler.js';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
    </ul>
</section>

<?php $this->append('buffered'); ?>
    vowelScrambler.init();
<?php $this->end(); ?>
