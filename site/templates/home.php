<!doctype html>
<html>
<?php snippet('header') ?>
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="<?= $site->page('meta-info')->searchable() == 'Yes' ? 'index' : 'noindex' ?>">
  <meta name="description" content="<?= $site->page('meta-info')->metadesc() ?>">
  <title><?= $site->headline()->html() ?></title>
  <style>
  .container{
    position: relative;
    top: 0;
    text-align: center;
    z-index: -1;
  }
  .container h{
    color: white;
    font: 40px Arial, Verdana, Helvetica, sans-serif;
    text-decoration: underline;
    letter-spacing: 15px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .page b {
    font: 17px Arial, Verdana, Helvetica, sans-serif;
    font-weight:bold; 
    color:#000066;
  }
  .page p {
    font: 16px Arial, Verdana, Helvetica, sans-serif; 
    line-height: 1.5;
  }
  .page a:link, .page a:visited {
    color: orangered;
    text-decoration: none;
  }
  .page a:hover, .page a:active {
    color: grey;
    text-decoration: none;
  }
  .page {
    padding: 40px;
  }

  </style>
</head>
<main>
  <div class="container">
    <img src="<?= $page->image('main-cover.jpg')->url() ?>" alt="Main Page" style="width:100%;">
    <h><?= $page->headline()->html() ?></h>
  </div>
  <div class="page">
    <b><?= $page->titleText()->html() ?></b>
    <p><?= $page->text()->kirbytext() ?></p>
  </div>
</main>
<?php snippet('footer') ?>
</html>