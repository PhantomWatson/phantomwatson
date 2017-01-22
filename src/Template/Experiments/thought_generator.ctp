<?php $this->Html->css('experiments/ether_markov', ['block' => 'css']); ?>
<?php $this->Html->script('experiments/ether_markov.js', ['block' => 'script_bottom']); ?>
<?php $this->append('buffered'); ?>
    EtherMarkov.init('/experiments/thought-generator-source.json');
<?php $this->end(); ?>

<?= $this->element('Experiments/back') ?>

<h1>
    Experiment #3: Thought Generator
</h1>

<p>
    This generates text based on "thoughts" that have been shared on <a href="http://theether.com">Ether</a>.
    Set the speed and the block length (smaller for more variation, larger for less variation) and let'r rip.
    The <em>Thinkin'</em> section shows you how the process takes a block of N words and searches for a random word
    that someone, somewhere once wrote <em>after</em> that. The <em>Entropy Score</em> shows you how many times your
    text encountered a fork in the road where it could switch from one source thought to another.
</p>

<?= $this->element('Experiments/thought_generator') ?>

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
                $path = APP . 'Template' . DS . 'Element' . DS . 'Experiments' . DS . 'thought_generator.ctp';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                Javascript
            </button>
            <pre><?php
                $path = WWW_ROOT . 'js' . DS . 'experiments' . DS . 'ether_markov.js';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                CSS
            </button>
            <pre><?php
                $path = WWW_ROOT . 'css' . DS . 'experiments' . DS . 'ether_markov.css';
                echo htmlentities(file_get_contents($path));
                ?></pre>
        </li>
    </ul>
</section>
