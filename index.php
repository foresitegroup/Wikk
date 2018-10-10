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
    
    <div class="home-featured">
      <div class="site-width">
        <div class="side-title">
          <h1>Featured Solution</h1>
          <div class="line"></div>
        </div>

        <div class="image">
          <div id="fic"><img src="images/home-featured-circle.png" alt=""></div>
          <img src="images/home-featured.png" alt="" id="fi">
        </div>

        <div class="text">
          <h2>The RD-17 Bollard</h2>
          <h3>with SFA Switch</h3>
          A robust bollard for everyday use. Removable Bollard for In-ground mounting,  Flat Recessed area for ADA switch and Card Reader, 1 Prep on the angle top for intercom, Welded Angle top to the front.<br>

          <a href="#" class="button">See All Standard Bollard Options</a>
        </div>
      </div>
    </div>

    <div id="home-testimonials">
      <div class="site-width">
        <span class="side-title">
          <h1>Testimonials</h1>
          <div class="line"></div>
        </span>

        <div>
          <img src="images/paren-left.svg" alt="" id="pl">
          <img src="images/paren-right.svg" alt="" id="pr">

          <div>
            "Wikk has provided us with a wide bredth of accessibility solutions that has not only helped us become a more inclusive environment, but has provided us with peace of mind as well. They are always there to help."<br>
            <br>
            <span>- Jane Jones,</span> Business Manager
          </div>

          <div>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis tortor quis fringilla placerat. Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo."<br>
            <br>
            <span>- John Smith,</span> Doctor
          </div>
        </div>
      </div>
    </div>

    <div id="home-blog">
      <div class="site-width">
        <div class="side-title">
          <h1>Innovations / Blogs</h1>
          <div class="line"></div>
        </div>

        <div id="blog-tiles">
          <a href="#">
            <h5>Innovation</h5>

            <div class="image" style="background-image: url(https://picsum.photos/640/360);"></div>

            <h4>Wikk Touchless Switch</h4>

            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis tortor quis fringilla placerat. Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus...</div>
          </a>

          <a href="#">
            <h5>Blog</h5>

            <div class="image" style="background-image: url(https://picsum.photos/641/361);"></div>

            <h4>Accessibility takes the big stage</h4>

            <div class="text">Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo. Ut convallis tortor quis fringilla placerat.</div>
          </a>

          <a href="#">
            <h5>Blog</h5>

            <div class="image" style="background-image: url(https://picsum.photos/642/362);"></div>

            <h4>Access for everyone</h4>

            <div class="text">Ut convallis tortor quis fringilla placerat. Suspendisse eget eros metus. In in dictum nisi. Praesent venenatis, tortor nec sollicitudin cursus, lectus aliquam mauris, id malesuada enim urna at leo...</div>
          </a>
        </div>
      </div>
    </div>
    
    <div id="home-blog-more">
      <a href="#" class="button">See All Innovations &amp; Blogs</a>
    </div>

    <div class="site-width prefooter">
      Ready to Request a Proposal? <a href="#" class="button">Contact Us</a>
    </div>
    
    <footer>
      <div class="site-width">
        <img src="images/footer-logo.svg" alt="" id="footer-logo">

        <ul>
          <li><a href="#">Pro Area</a></li>
          <li>
            <a href="#">Blog</a>
            <ul>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Solutions</a>
            <ul>
              <li><a href="#">Bollards</a></li>
              <li><a href="#">Ingress'r</a></li>
              <li><a href="#">Switches</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
          <li>
            <a href="#">About</a>
            <ul>
              <li><a href="#">Innovations</a></li>
              <li><a href="#">Testimonials</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Contact</a>
            <ul>
              <li><a href="#">Sales/Service</a></li>
              <li><a href="#">RFP</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </footer>

    <div id="copyright">
      &copy <?php echo date("Y"); ?> Wikk Industries
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.home-featured .image').height($('.home-featured .image #fi').height()-45);

        $(window).scroll(function() {
          var theta = $(window).scrollTop() / 3000 % Math.PI;
          $('#fic IMG').css({ transform: 'rotate(' + theta + 'rad)' });
        });

        console.log($('#home-blog .side-title H1').width());

        function TitleLine() {
          if ($(window).outerWidth() > 750) {
            $('.side-title .line').each(function() {
              $(this).css({
                "height": $(this).parent().parent().parent().height() - $(this).siblings().width()-115,
                "width": "3px",
                "top": $(this).siblings().width()+15,
                "left": "4px"
              });
            });
          } else {
            $('.side-title .line').each(function() {
              $(this).css({
                "height": "3px",
                "width": $(this).parent().parent().width() - $(this).siblings().width()-15,
                "top": "0.5em",
                "left": $(this).siblings().width()+15
              });
            });
          }
        }

        TitleLine();

        $(window).resize(function(){ setTimeout(function() { TitleLine(); },100); });

        var ParenTime = 1500;
        var FadeTime = 1000;
        var DelayTime = 5000;
        var CrossFade = 500;
        var TotalTime = (ParenTime*2) + (FadeTime*2) + DelayTime - (CrossFade*2);
        var slideIndex = 0;

        function SlideShow() {
          $("#home-testimonials .site-width DIV DIV").css("display", "none");
          slideIndex++;
          if (slideIndex > $("#home-testimonials .site-width DIV DIV").length) slideIndex = 1;

          $("#pl").animate({ left: "0" }, ParenTime);
          $("#pr").animate({ left: $('#home-testimonials .site-width > DIV').width() - $('#pr').width() }, ParenTime);

          setTimeout(function() {
          $('#home-testimonials .site-width DIV DIV:nth-of-type('+slideIndex+')').css("display", "block")
            .animate({ opacity: 1 }, FadeTime)
            .delay(DelayTime)
            .animate({ opacity: 0 }, FadeTime);
          }, ParenTime - CrossFade);
          
          setTimeout(function() {
            $("#pl").animate({ left: ($('#home-testimonials .site-width > DIV').width()*0.48) - $('#pl').width() }, ParenTime);
            $("#pr").animate({ left: "52%" }, ParenTime);
          }, DelayTime + (FadeTime*2));

          setTimeout(SlideShow, TotalTime);
        }
        
        SlideShow();
      });
    </script>

  </body>
</html>