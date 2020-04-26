<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <style>
    .footer {
      position: relative;
      background: navy;
      padding: 20px;
      text-align: left;
    }
    .footer p {
      color: white;
      font: 12px Arial, Verdana, Helvetica, sans-serif;
    }
    .box {
      display: flex;
      flex-flow: column;
      height: 100%;
    }
  .box a:link, .box a:visited {
    color: orangered;
  }
  .box a:hover, .box a:active {
    color: grey;
  }
  .socials a {
    float: right;
    text-decoration: none;
    margin-right: 30px;
  }
  .socials a:hover {
    opacity: 50%
  }
  .scroll {
    position: sticky;
    bottom: 5%;
    float: right;
  }
  </style>
</head>
<body>
  <div class="box">
    <footer class="footer">
      <p>©2013-2016 BeMo Academic Consulting Inc. All rights reserved.
      <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html" style=display: inline>Disclaimer & Privacy Policy</a>
      <a href="mailto:info@bemoacademicconsulting.com" style=display: inline>Contact Us</a>
      </p>
      <div class="socials">
        <a href="https://twitter.com/BeMo_AC" class="twitter">
          <img src="<?= $site->page("home")->image('twitter.png')->url() ?>" alt="TW" style="width:25px;height:20px;border:0;">
        </a>
        <a href="https://www.facebook.com/bemoacademicconsulting" class="facebook">
          <img src="<?= $site->page("home")->image('facebook.png')->url() ?>" alt="FB" style="width:20px;height:20px;border:0;">
        </a>
      </div>
    </footer>
  </div>
  <div class="scroll">
    <a href="#" class="scrollup">
      <img src="<?= $site->page("home")->image('arrow.png')->url() ?>" alt="Scroller" style="width:50px;height:100px;border:0;">
    </a>
  </div>
</body>
</html>