<!doctype html>
<html>
<?php snippet('header') ?>
<head>
<meta name="robots" content="<?= $site->page('meta-info')->searchable() == 'Yes' ? 'index' : 'noindex' ?>">
<style>
    .page b {
        font: 17px Arial, Verdana, Helvetica, sans-serif;
        font-weight:bold; 
    }
    .page span {
        font: 13px Arial, Verdana, Helvetica, sans-serif; 
        line-height: 1.5;
    }
    .page {
        padding: 40px;
    }
    .form {
        margin: auto;
        width: 80%;
    }
    .nameInput label {
        text-align: center;
        font-size: 13px;
        margin-left: 50%;
    }
    .nameInput input {
        background-color: lightgrey;
        margin: 7px 0px 0px; 
        width: 100%; 
    }
    .emailInput label {
        text-align: center;
        font-size: 13px;
        margin-left: 45%;
    }
    .emailInput input {
        background-color: lightgrey;
        margin: 7px 0px 0px; 
        width: 100%; 
    }
    .messageinput label {
        text-align: center;
        font-size: 13px;
        margin-left: 42%;
    }
    .messageinput textarea {
        background-color: lightgrey;
        margin: 7px 0px 0px; 
        width: 100%; 
        height: 164px;
        resize: horizontal;
    }
    .buttons button {
        background-color: grey;
        color: blue;
        position: relative;
        left: 45%;
    }
    .foottext {
        text-align: center;
    }
  </style>
</head>
<body>
<img src="<?= $page->image('contact-us.png')->url() ?>" alt="Contact Page" style="width:100%;">
<div class="page">
    <b><?= $page->headline()->html() ?></b>
    <p><span style="font-weight:bold; text-decoration: underline"><?= $page->label1()->html() ?></span> <span style="font-size: 14px"><?= $page->text1()->html() ?></span></p>
    <p><span style="font-weight:bold; text-decoration: underline"><b2><?= $page->label2()->html() ?></span> <span style="font-size: 14px"><?= $page->text2()->html() ?></span></p>
    <?php snippet('formbuilder'); ?>
    <div class="foottext">
        <p><span style="font-size: 15px; font-weight:bold; text-decoration: underline"><b2><?= $page->label3()->html() ?></span> <span style="font-size: 13px"><?= $page->text3()->html() ?></span></p>
    </div>
</div>
</body>
<?php snippet('footer') ?>
</html>