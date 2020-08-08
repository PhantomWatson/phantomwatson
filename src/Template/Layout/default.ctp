<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>
        PhantomWatson.com
        <?php if (isset($pageTitle)): ?>
            - <?= $pageTitle ?>
        <?php endif; ?>
    </title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#060606">
    <link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC|IM+Fell+Double+Pica+SC' rel='stylesheet'
          type='text/css'/>
    <link href="/font-awesome-5.14.0/css/all.min.css" rel="stylesheet" type="text/css" />

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->css('style') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?= $this->element('nav') ?>

<div id="content">
    <?= $this->fetch('content') ?>
</div>

<footer>
    &copy; <?= date('Y') ?> Graham Watson
</footer>

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-1.12.0.min.js"><\/script>')</script>

<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/jquery.mb.YTPlayer.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/script.js"></script>

<?= $this->fetch('script_bottom') ?>
<script>
    $(document).ready(function () {
        <?= $this->fetch('buffered') ?>
    });
</script>
</body>
</html>
