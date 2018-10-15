<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <title>Wikk Industries<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Days+One|Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").prop('target','new');

        function TitleLine() {
          if ($(window).outerWidth() > 750) {
            $('.sidetitle').each(function() {
              $(this).css({ "width": $(this).parent().parent().height()-115 });
            });
          }
        }

        TitleLine();

        $(window).resize(function(){ setTimeout(function() { TitleLine(); },100); });
      });
    </script>
  </head>
  <body>

    <header class="site-width">
      <a href="." id="logo">
        <img src="images/logo.svg" alt="Wikk Industries"> simply. accessible.
      </a>

      <div id="header-menu">
        <a href="#" class="hm">Pro Area</a>
        800-123-4567
      </div>
    </header>

    <input type="checkbox" id="toggle-menu" role="button">
    <label for="toggle-menu"></label>

    <nav>
      <ul>
        <li>
          <a href="#">Solutions</a>
          <ul>
            <li><a href="#">Bollards</a></li>
            <li><a href="#">Ingress'r</a></li>
            <li><a href="#">Switches</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
        <li>
          <a href="#">Contact</a>
          <ul>
            <li><a href="#">General/Sales</a></li>
            <li><a href="#">RFP</a></li>
          </ul>
        </li>
        <li class="mobile"><ul><li><a href="#">Pro Area</a></li></ul></li>
      </ul>
    </nav>
