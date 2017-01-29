<h1>
    Experiments
</h1>

<p>
    Things I've developed for incomplete and future projects, for curiosity, or for fun. These tend to use
    <a href="https://getbootstrap.com/">Bootstrap></a> and <a href="https://jquery.com/">jQuery</a>.
</p>

<ul>
    <li>
        <?= $this->Html->link(
            '#1: Word Coalesce',
            ['action' => 'wordCoalesce']
        ) ?>
        <p>
            A visual effect that animates nearby letters melding into a selected word
        </p>
    </li>
    <li>
        <?= $this->Html->link(
            '#2: Drunk',
            ['action' => 'drunk']
        ) ?>
        <p>
            Visual effects simulating drunkenness, used in
            <a href="http://zombie.phantomwatson.com">Zombie Nightclub Hoedown</a>
        </p>
    </li>
    <li>
        <?= $this->Html->link(
            '#3: Thought Generator',
            ['action' => 'thoughtGenerator']
        ) ?>
        <p>
            A Markov chain text generator developed for
            <a href="http://theether.com">Ether</a>
        </p>
    </li>
</ul>