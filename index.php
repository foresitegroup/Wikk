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

    <div id="hero">
      <div class="site-width">
        <div>
          <h1>Elevating spaces through accessibility.</h1>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis tortor quis fringilla placerat. Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo. Etiam imperdiet risus massa, ut sollicitudin ipsum tristique ut. Morbi dignissim quis arcu a viverra. Sed nec diam at felis luctus iaculis.
        </div>
      </div>
    </div>

    <div class="site-width home-featured">
      <div class="side-title">
        <h1>Featured Solution</h1>
        <div class="line"></div>
      </div>

      <div class="image">
        <img src="images/home-featured-circle.png" alt="" id="fic">
        <img src="images/home-featured.png" alt="" id="fi">
      </div>

      <div class="text">
        <h2>The RD-17 Bollard</h2>
        <h3>with SFA Switch</h3>
        A robust bollard for everyday use. Removable Bollard for In-ground mounting,  Flat Recessed area for ADA switch and Card Reader, 1 Prep on the angle top for intercom, Welded Angle top to the front.<br>

        <a href="#">See All Standard Bollard Options</a>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.home-featured .image').height($('.home-featured .image #fi').height()-45);

        $(window).scroll(function() {
          var theta = $(window).scrollTop() / 5000 % Math.PI;
          $('#fic').css({ transform: 'rotate(' + theta + 'rad)' });
        });
        
        function TitleLine() {
          if ($(window).outerWidth() > 750) {
            $('.home-featured .side-title .line').css({
              "height": $('.home-featured').height() - $('.home-featured .side-title H1').width()-115,
              "width": "3px",
              "top": $('.home-featured .side-title H1').width()+15,
              "left": "4px"
            });
          } else {
            $('.home-featured .side-title .line').css({
              "height": "3px",
              "width": $('.home-featured').width() - $('.home-featured .side-title H1').width()-15,
              "top": "0.5em",
              "left": $('.home-featured .side-title H1').width()+15
            });
          }
        }

        TitleLine();

        $(window).resize(function(){ setTimeout(function() { TitleLine(); },100); });
      });
    </script>

    <div class="site-width">
      <h1>Content (H1)</h1>

      Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
      <br>

      Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
      <br>

      Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

  </body>
</html>