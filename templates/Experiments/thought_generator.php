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
    This generates text based on "thoughts" that have been shared on <a href="https://theether.com">Ether</a>.
    Set the speed and the block length (smaller for more variation, larger for less variation) and let'r rip.
    The <em>Thinkin'</em> section shows you how the process takes a block of N words and searches for a random word
    that someone, somewhere once wrote <em>after</em> that. The <em>Entropy Score</em> shows you how many times your
    text encountered a fork in the road where it could switch from one source thought to another.
</p>

<p>
    Visit <a href="https://theether.com/generator">theEther.com/generator</a> to try it out.
</p>

<p>
    <a href="https://theether.com/generator">
        <img src="/img/thought-generator.png" alt="Screenshot of the Ether Thought Generator" title="Click to check out the Ether Thought Generator" />
    </a>
</p>

<section id="source">
    <h2>
        Source
    </h2>
    <ul>
        <li>
            <a href="https://github.com/PhantomWatson/ether/blob/master/webroot/js/ether-markov.js">
                Javascript
            </a>
        </li>
    </ul>
</section>
