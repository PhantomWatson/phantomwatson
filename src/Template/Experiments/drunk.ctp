<?php $this->Html->css('experiments/drunk', ['block' => 'css']); ?>
<?php $this->Html->script('experiments/drunk.js', ['block' => 'script_bottom']); ?>

<?= $this->element('Experiments/back') ?>

<h1>
    Experiment #2: Drunk
</h1>

<p>
    Select a level of drunkenness below to activate. Lower levels are more subtle, while the highest levels are...
    well, <em>not</em>. Wait a few seconds for visual effects to start kicking in. Switch drunkenness level while the
    effect is enabled to see how the different levels look. This experiment a higher-than-average chance of breaking
    the layout or causing other browser weirdness.
</p>

<p class="form-inline">
    <?= $this->element('Experiments/drunk') ?>
</p>

<p>
    To see these effects put to good(?) use, play
    <a href="http://zombie.phantomwatson.com">Zombie Nightclub Hoedown</a> and order a bunch of drinks from the
    bartender in the game.
</p>

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
                $path = APP . 'Template' . DS . 'Element' . DS . 'Experiments' . DS . 'drunk.ctp';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                Javascript
            </button>
            <pre><?php
                $path = WWW_ROOT . 'js' . DS . 'experiments' . DS . 'drunk.js';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                CSS
            </button>
            <pre><?php
                $path = WWW_ROOT . 'css' . DS . 'experiments' . DS . 'drunk.css';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
    </ul>
</section>

<?php $this->append('buffered'); ?>
    drunk.init();
<?php $this->end(); ?>
