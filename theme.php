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
<link rel="stylesheet" href="/themes/hal/assets/css/main.css?vx<?php echo(rand(1,15));?><?php echo(rand(1,15));?>" />
<?= $Wcms->css() ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="subpage">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div id="page-wrapper">
<section id="header">
<div class="container">
<div class="row">
<div class="col-12">
<div id="logo"><h1><a href="/">
<img src="/data/files/logo.png" id="logo-responsive"></a></h1></div>
<nav id="nav">
<a href="/mlb-betting" title="MLB Betting"><i class="fas fa-baseball-ball" aria-hidden="true" style="font-size:24px"></i> MLB</a>
<a href="/nba-betting" title="NBA Betting"><i class="fas fa-basketball-ball" aria-hidden="true" style="font-size:24px"></i> NBA</a>
<a href="/nfl-betting" title="NFL Betting"><i class="fas fa-football-ball" aria-hidden="true" style="font-size:24px"></i> NFL</a>
<a href="/nhl-betting" title="NHL Betting"><i class="fas fa-hockey-puck" aria-hidden="true" style="font-size:24px"></i> NHL</a>
<a href="/casino-sites" title="Casinos Betting"><i class="fas fas fa-dice" aria-hidden="true" style="font-size:24px"></i> Casinos</a>
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
<?= $Wcms->block('subside') ?>
</section>
</div>
</div>
</div>
</section>
<div id="footer" class="col-12 col-12-medium">
<?= $Wcms->footer() ?>
</div>
</div>
<script src="/themes/hal/assets/js/jquery.min.js"></script>
<script src="/themes/hal/assets/js/browser.min.js"></script>
<script src="/themes/hal/assets/js/breakpoints.min.js"></script>
<script src="/themes/hal/assets/js/util.js"></script>
<script src="/themes/hal/assets/js/main.js"></script>
<?= $Wcms->js() ?>
<script src="https://kit.fontawesome.com/f3d2ccccf4.js" crossorigin="anonymous"></script>
</body>
</html>