<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/#home" class="scroll">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/#services" class="scroll">
                        Services
                    </a>
                </li>
                <li>
                    <a href="/#sites" class="scroll">
                        Sites
                    </a>
                </li>
                <li>
                    <a href="/#contact" class="scroll">
                        Contact
                    </a>
                </li>
                <li>
                    <?= $this->Html->link(
                        'Experiments',
                        [
                            'controller' => 'Experiments',
                            'action' => 'index'
                        ]
                    ) ?>
                </li>
                <li>
                    <a href="https://github.com/PhantomWatson" title="GitHub">
                        <i class="fa fa-github" style="font-size: 20px;"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/grahamwatson2" title="LinkedIn">
                        <i class="fa fa-linkedin-square" style="font-size: 20px;"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/phant0m.watson/" title="Facebook">
                        <i class="fa fa-facebook-square" style="font-size: 20px;"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>