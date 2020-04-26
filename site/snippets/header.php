<!doctype html>
<html lang="en">
<?= $site->page('meta-info')->facebookpixel()->html() ?>
<?= $site->page('meta-info')->googleanalytics()->html() ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <style>
    .headerMaster {
      padding: 0px 30px;
      background: rgba(255, 255, 255, 0.9);
      color: black;  
      position: sticky;
      top: 0;
      text-align: left;
    }
    .menu a {
      margin-right: 50px;
      color: black;
      font: 18px Arial, Verdana, Helvetica, sans-serif;
      text-decoration: none;
      position: relative;
      top: 100%;
      left: 50%; 
    }

    .menu a[aria-current] {
      border-bottom: 1px solid #000;
    }
    .menu a:hover {
      border-bottom: 1px solid #000;
    }
  </style>
</head>
<body>
  <div class="headerMaster">
      <header class="header" id="siteHeader">
        <a class="logo" href="<?= $site->url() ?>">
          <img src="<?= $site->page('home')->image('logo.png')->url() ?>" alt="Site Logo" style="width:10%;height:9%;border:0;">
        </a>

        <nav id="menu" class="menu">
          <?= $site->page("contact-us")->title()->link() ?>
          <a class="Questions" href="http://cdainterview.com/sample-cda-interview-questions.html">CDA Interview Questions</a>
          <a class="Prepare" href="http://cdainterview.com/how-to-prepare-for-cda-interview.html">How to Prepare</a>
          <?= $site->page("home")->title()->link() ?>
        </nav>
      </header>
    </div>
</body>
