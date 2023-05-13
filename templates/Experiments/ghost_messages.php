<?php $this->Html->css('experiments/ghost_messages', ['block' => 'css']); ?>
<?php $this->Html->script('experiments/ghost_messages', ['block' => 'script_bottom']); ?>

<?= $this->element('Experiments/back') ?>

<h1>
    Experiment #6: Ghost Messages
</h1>

<?= $this->element('Experiments/ghost_messages') ?>

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
                $path = APP . 'Template' . DS . 'Element' . DS . 'Experiments' . DS . 'ghost_messages.ctp';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                Javascript
            </button>
            <pre><?php
                $path = WWW_ROOT . 'js' . DS . 'experiments' . DS . 'ghost_messages.js';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
        <li>
            <button>
                LESS
            </button>
            <pre><?php
                $path = WWW_ROOT . 'css' . DS . 'experiments' . DS . 'ghost_messages.less';
                echo htmlentities(file_get_contents($path));
            ?></pre>
        </li>
    </ul>
</section>

<?php $this->append('buffered'); ?>
    ghostMessages.init();
<?php $this->end(); ?>
