<?php $this->Html->css('experiments/color_walk', ['block' => 'css']); ?>
<?php $this->Html->script('experiments/color_walk', ['block' => 'script_bottom']); ?>

<?= $this->element('Experiments/back') ?>

<h1>
    Experiment #5: Color Walk
</h1>

<?= $this->element('Experiments/color_walk') ?>

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
                $path = APP . 'Template' . DS . 'Element' . DS . 'Experiments' . DS . 'color_walk.ctp';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                Javascript
            </button>
            <pre><?php
                $path = WWW_ROOT . 'js' . DS . 'experiments' . DS . 'color_walk.js';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
    </ul>
</section>

<?php $this->append('buffered'); ?>
    colorWalk.init('body');
<?php $this->end(); ?>
