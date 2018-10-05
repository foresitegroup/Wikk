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

<style>
  #herotest {
    background: url(images/hero.jpg) center center no-repeat;
    background-size: cover;
    color: #FFFFFF;
  }

  #herotest .site-width {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 664px;
  }

  #herotest .site-width > DIV {
    width: 66%;
    text-align: center;
    font-weight: 700;
    line-height: 1.8em;
    position: relative;
    min-height: 310px;
    display: flex;
    align-items: center;
  }

  #herotest .site-width > DIV > DIV {
    margin: 0 12%;
    opacity: 0;
    display: none;
  }

  #herotest .site-width > DIV > DIV.active { display: block; }

  #pl {
    position: absolute;
    top: 0;
    right: 52%;
    height: 100%;
    width: auto;
    opacity: 0.25;
  }

  #pr {
    position: absolute;
    top: 0;
    left: 52%;
    height: 100%;
    width: auto;
    opacity: 0.25;
  }

  #herotest .site-width > DIV > DIV H1 {
    margin: 0 0 0.15em;
    padding: 0 0.75em;
    font-family: 'Days One', sans-serif;
    font-weight: 400;
    font-size: 36px;
    line-height: 1.1em;
  }
</style>

<div id="herotest">
  <div class="site-width">
    <div>
      <img src="images/paren-left.svg" alt="" id="pl">
      <img src="images/paren-right.svg" alt="" id="pr">
      <div>
        <h1>Elevating spaces through accessibility.</h1>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis tortor quis fringilla placerat. Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo. Etiam imperdiet risus massa, ut sollicitudin ipsum tristique ut. Morbi dignissim quis arcu a viverra. Sed nec diam at felis luctus iaculis.
      </div>

      <div>
        <h1>Slide Two</h1>
        Ut convallis tortor quis fringilla placerat. Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo. Etiam imperdiet risus massa, ut sollicitudin ipsum tristique ut. Morbi dignissim quis arcu a viverra. Sed nec diam at felis luctus iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </div>

      <div>
        <h1>Slide Three</h1>
        Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo. Etiam imperdiet risus massa, ut sollicitudin ipsum tristique ut. Morbi dignissim quis arcu a viverra. Sed nec diam at felis luctus iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis tortor quis fringilla placerat.
      </div>
    </div>
  </div>
</div>

<script>
  var ParenTime = 1500;
  var FadeTime = 1000;
  var DelayTime = 5000;
  var CrossFade = 500;
  var TotalTime = (ParenTime*2) + (FadeTime*2) + DelayTime - (CrossFade*2);

  function OpenParen() {
    var deferred = $.Deferred();

    $("#pl")
      .animate({ left: "0" }, ParenTime, function() { deferred.resolve(); });
    $("#pr")
      .animate({ left: $('#herotest .site-width > DIV').width() - $('#pr').width() }, ParenTime);
    
    return deferred.promise();
  }
  
  function FadeText() {
    var deferred = $.Deferred();

    $('#herotest .site-width > DIV > DIV')
      .animate({ opacity: 1 }, FadeTime)
      .delay(DelayTime)
      .animate({ opacity: 0 }, FadeTime, function() { deferred.resolve(); });
    
    return deferred.promise();
  }

  function CloseParen() {
    var deferred = $.Deferred();

    $("#pl")
      .animate({ left: ($('#herotest .site-width > DIV').width()*0.48) - $('#pl').width() }, ParenTime);
    $("#pr")
      .animate({ left: "52%" }, ParenTime, function() { deferred.resolve(); });
    
    return deferred.promise();
  }

  function HeroTest() {
    OpenParen().then(FadeText).then(CloseParen).then(HeroTest);
  }

  function showSlides() {
    $("#herotest .site-width DIV DIV").css("display", "none");
    slideIndex++;
    if (slideIndex > $("#herotest .site-width DIV DIV").length) slideIndex = 1;

    $("#pl").animate({ left: "0" }, ParenTime);
    $("#pr").animate({ left: $('#herotest .site-width > DIV').width() - $('#pr').width() }, ParenTime);

    setTimeout(function() {
    $('#herotest .site-width DIV DIV:nth-of-type('+slideIndex+')').css("display", "block")
      .animate({ opacity: 1 }, FadeTime)
      .delay(DelayTime)
      .animate({ opacity: 0 }, FadeTime);
    }, ParenTime - CrossFade);
    
    setTimeout(function() {
      $("#pl")
        .animate({ left: ($('#herotest .site-width > DIV').width()*0.48) - $('#pl').width() }, ParenTime);
      $("#pr")
        .animate({ left: "52%" }, ParenTime);
    }, DelayTime + (FadeTime*2));

    setTimeout(showSlides, TotalTime);
  }

  // HeroTest();
  var slideIndex = 0;
  showSlides();
</script>

    <div class="site-width">
      <h1>Content (H1)</h1>

      Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
      <br>

      Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
      <br>

      Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.
    </div>

  </body>
</html>