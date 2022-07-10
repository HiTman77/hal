<?php global $Wcms ?>
<!DOCTYPE HTML>
<html lang="en-us">
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<link rel="shortcut icon" href="/data/files/favicon.png">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/themes/hal/assets/css/main.css?v<?php echo(rand(1,15));?><?php echo(rand(1,15));?>" />
<?= $Wcms->css() ?>
</head>
<body class="subpage">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div id="page-wrapper">
<section id="header">
<div class="container">
<div class="row">
<div class="col-12">
<h1><a href="/" id="logo"><?= $Wcms->get('config', 'siteTitle') ?></a></h1>
<nav id="nav">
<a href="/">Homepage</a>
<a href="/about">About</a>
<a href="/faq">FAQ</a>
<a href="/contact">Contact</a>
</nav>
</div>
</div>
</div>
</section>
<section id="content">
<div class="container">
<div class="row">
<div class="col-12">
<section>
<header>
<h2><?= $Wcms->page('keywords') ?></h2>
<h3><?= $Wcms->page('description') ?></h3>
</header>
<?= $Wcms->page('content') ?>
</section>
</div>
</div>
</div>
</section>
<section id="footer">
<div class="container">
<div class="row">
<?= $Wcms->block('subside') ?>
<div class="col-12 col-12-medium">
<section>
<div>
<div class="row">

</div>
</div>
</section>
</div>
</div>
</div>
</section>
<div id="copyright">
<?= $Wcms->footer() ?>
</div>
</div>
<script src="/themes/hal/assets/js/jquery.min.js"></script>
<script src="/themes/hal/assets/js/browser.min.js"></script>
<script src="/themes/hal/assets/js/breakpoints.min.js"></script>
<script src="/themes/hal/assets/js/util.js"></script>
<script src="/themes/hal/assets/js/main.js"></script>
<?= $Wcms->js() ?>
</body>
</html>