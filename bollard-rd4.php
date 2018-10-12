<?php
$PageTitle = "Bollard RD4";
include "header.php";
?>

<link rel="stylesheet" href="inc/simplebar.css">
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>



<div class="site-width">
  <div id="product-header">
    <div>
      <h1><?php echo $PageTitle; ?></h1>
      <h2>Part # <span>BPR SM AINS 32D (630)</span></h2>
    </div>

    <a href="#" class="button">Print Spec Sheet</a>
  </div>

  <div id="product">
    <div id="image">
      <div class="sidetitle bottom">
        <h1>Placeholderp</h1>
      </div>

<!--       <div class="side-title">
        <h1>Placeholder</h1>
        <div class="line"></div>
      </div> -->

      <div id="images">
        <div id="bigimage">yo</div>

        <div id="imagethumbs">
          <div style="background-image: url(images/bollard-rd4.png);">Hola<br>Mundo!</div>
          <div style="background-image: url(https://picsum.photos/500);"></div>
          <div style="background-image: url(https://picsum.photos/501);"></div>
          <div style="background-image: url(https://picsum.photos/300/900);"></div>
          <div style="background-image: url(https://picsum.photos/301/901);"></div>
          <div style="background-image: url(https://picsum.photos/302/902);"></div>
          <div style="background-image: url(https://picsum.photos/303/903);"></div>
        </div>
      </div>

      <div id="caption">
        The caption
      </div>
    </div>

<script type="text/javascript">
  $(document).ready(function() {
    if ($(window).outerWidth() > 750) {
      $('#image .side-title .line').css({
        "height": $('#images').height() - $('#image .side-title H1').width(),
        "top": "auto",
        "bottom": $('#image .side-title H1').width() + $('#caption').height()
      });
      // console.log($('#image .side-title H1').width());
    } else {
    }

    $('#image .sidetitle').css({ "width": $('#images').height()-56, "top": "calc(56px - 1em)" });

    
    
    function SetActive(target) {
      $('#caption').html($(target).html());

      $('#bigimage').height($('#tabs').height()-$('#imagethumbs').height()-$('#caption').outerHeight());

      var bg = $(target).css("background-image");
      bg = bg.replace(/.*\s?url\([\'\"]?/, '').replace(/[\'\"]?\).*/, '');
      $('#bigimage').html("<img src=\""+bg+"\" alt=\"\">");
    }

    SetActive('#imagethumbs > DIV:first-of-type');

    

    $('#imagethumbs > DIV').click(function() {
      var bg = $(this).css("background-image").replace(/.*\s?url\([\'\"]?/, '').replace(/[\'\"]?\).*/, '');
      $('#bigimage').html("<img src=\""+bg+"\" alt=\"\">");
    });
  });
</script>

    <div id="tabs">
      <input id="tab-summary" type="radio" name="tabs" checked>
      <label for="tab-summary">Spec Summary</label>
      <input id="tab-features" type="radio" name="tabs">
      <label for="tab-features">Features</label>
      <input id="tab-options" type="radio" name="tabs">
      <label for="tab-options">Options</label>
      <input id="tab-literature" type="radio" name="tabs">
      <label for="tab-literature">Literature</label>

      <div id="content-summary">
        <div data-simplebar data-simplebar-auto-hide="false">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum odio diam, hendrerit rutrum ultricies congue, hendrerit et urna. Suspendisse velit metus, fermentum nec dignissim sed, lacinia non metus. Maecenas blandit, orci at porttitor vehicula, lectus mauris euismod eros, vitae malesuada leo eros quis turpis. Etiam varius rutrum quam at pretium.<br>
          <br>

          <h1>Specifications</h1>
          <strong>Material:</strong> 0.120" Stainless Steel 304<br>
          <strong>Finish:</strong> US32D<br>
          <strong>Height:</strong> 48"
        </div>
      </div>

      <div id="content-features">
        <div data-simplebar data-simplebar-auto-hide="false">
          <ul>
            <li>Welded angle top</li>
            <li>304 Stainless Steel</li>
            <li>Insert area for mounting flat device to round Bollard</li>
          </ul>
        </div>
      </div>

      <div id="content-options">
        <div data-simplebar data-simplebar-auto-hide="false">
          <h1>Mounting Installation</h1>
          <ul>
            <li><strong>SM</strong> = Surface mount: standard posts are 42" [1067 mm] high, single gang prep @ 36"CL/AFF [914 mm]; includes aluminum anchoring base, anchors and instructions.</li>
            <li><strong>IG</strong> = In-ground: standard posts are 54" [1372 mm] high, single gang prep @ 36"CL/AFF [914 mm] including 12" [305 mm] recess and instructions.</li>
          </ul>

          <br>

          <h1>Overall Height</h1>
          <ul>
            <li>Can be customized to be shorter or taller than standard height.</li>
          </ul>

          <br>

          <h1>Architectural Materials & Finishes</h1>
          <strong>Square (BPS) Aluminum Tubes:</strong>
          <ul>
            <li>Anodized Aluminum: Clear (628), Dark Bronze (710), Black (711),and Mill finish for painting (PT) or powder coating (PC); Light Bronze Anodized (available for 6" square bollards only)</li>
            <li>
              Wall Thickness and Corner Radius for Aluminum:<br>
              Extruded; nominal 1/8" [3.175 mm] wall thickness, 4" and 6" Square: 1/32" corner radius
            </li>
          </ul>

          <strong>Square (BPS) Stainless Steel Tubes:</strong>
          <ul>
            <li>Satin Stainless Steel US32D (630) or Mirror Stainless Steel US32 (629) finishes</li>
            <li>
              Wall Thickness and Corner Radius for Square Stainless Steel:<br>
              Welded type 304; nominal 1/8" [3.175 mm] wall thickness<br>
              4" and 6" Square: 15/64" corner radius
            </li>
            <li>
              316 alloy available as special order<br>
              Brass Clad Aluminum (Square only): Nominal 18/19 gauge sheet metal over standard Aluminum extrusion, 9/64 corner radius
            </li>
            <li>
              Satin Brass US4 (606 uncoated) or Mirror Brass US3 (605 uncoated) finishes<br>
              Protective coating by others.
            </li>
          </ul>

          <strong>Round (BPR) Aluminum Tubes:</strong>
          <ul>
            <li>Anodized Aluminum: Dark Bronze (710) and Mill finish for painting (PT) or powder coating (PC)</li>
            <li>Powder coated (PC): To match Clear Anodized Aluminum</li>
            <li>
              Wall Thickness<br>
              Extruded; nominal 5/32" [4 mm] wall thickness
            </li>
          </ul>

          <strong>Round (BPR) Stainless Steel Tubes:</strong>
          <ul>
            <li>Satin Stainless Steel US32D (630) or Mirror Stainless Steel US32 (629) finishes</li>
            <li>
              Wall Thickness for Square Stainless Steel:<br>
              Welded type 304; nominal 1/8" [3.175 mm] wall thickness
            </li>
            <li>316 alloy available as special order</li>
          </ul>

          <br>

          <h1>Preps</h1>
          <ul>
            <li>INGRESS'R&reg;, standard and narrow style switches, card readers, intercoms, KNOX-boxes, fire pull stations and more.</li>
            <li>Square (BPS), Rectangular (BPRT) and Triangle (BPTR) Bollards: Switches and devices are mounted directly to post.</li>
            <li>
              Round (BPR) bollard: Curved switch (6C series) mounts directly to post. Use Adapter Cuff for additional items or switch styles; Stainless and Mill aluminum for painting (PT) or powder coating (PC) finishes.<br>
              Round bollards can be modified with recessed insert area to accommodate flat devices.
            </li>
          </ul>

          <span class="redtext">***At the time of quoting/ordering bollards we require the make, model, as well as mounting templates of all the devices to assure accurate preps.***</span><br>
          <br>

          Production will not start until the device information is provided.<br>
          All information will be kept confidential.<br>
          <br>

          <h1>Cap style &amp; finish</h1>
          <ul>
            <li>Flat top (FT): Standard black removable top (allows RF transmission)</li>
            <li>Flat top (FT): Stainless Steel, Aluminum and Brass removable top (not available for round bollards)</li>
            <li>Angled top (AT): Welded Stainless Steel or Mill Aluminum for painting (PT) or powder coating (PC) finishes; also available in Removable Angle Top (RAT)</li>
            <li>Dome (D): Round only, Welded Stainless or Mill Aluminum for painting (PT) or powder coating (PC) finishes</li>
          </ul>

          <br>

          <h1>Additional Options</h1>
          <ul>
            <li>
              Special sizes available per request - See Wikk's Bollard Checklists.<br>
              Sizes are subject to change without notice.<br>
              Example: 3"x3", 7"x7", 9"x9", 6"x9", 6"x12" and Triangle Bollards available in Stainless Steel, Aluminum and Steel
            </li>
            <li>Painted (PT) or Powder coated (PC) finish available</li>
            <li>Exposed Base Plate - different sizes available in round (RB), square (SB) and concealed sleeve (CS) with base plate for In-ground mounting with additional anchoring, 7" bolts and anchors</li>
            <li>Access Panel (AP) - Removable access panel on the back of bollard or the insert area with security screws.</li>
            <li>Hood-Added over devices to help to protect from environmental conditions.</li>
            <li>Reveal (R) - Decorative indention into the metal.</li>
        </div>
      </div>

      <div id="content-literature">
        <div data-simplebar data-simplebar-auto-hide="false">
          <a href="#">Round Bollard Examples &raquo;</a><br>

          <a href="#">Round Bollard Specifications &raquo;</a><br>

          <a href="#">BPR SM-AINS &raquo;</a><br>

          <a href="#">Bollard Instructions &raquo;</a><br>

          <a href="#">Wedge Anchor Installation Instructions &raquo;</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>