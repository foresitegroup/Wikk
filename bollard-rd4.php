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
      IMG GOES HERE
    </div>

    <div id="tabs">
      <input id="tab-summary" type="radio" name="tabs" checked>
      <label for="tab-summary">Spec Summary</label>
      <input id="tab-features" type="radio" name="tabs">
      <label for="tab-features">Features + Options</label>
      <input id="tab-literature" type="radio" name="tabs">
      <label for="tab-literature">Literature</label>

      <div id="content-summary">
        <div data-simplebar data-simplebar-auto-hide="false">
          The summary content
          <br><br><br><br><br><br><br><br><br><br><br><br>x
          <br><br><br><br><br><br><br><br><br><br><br><br>y
          <br><br><br><br><br><br><br><br><br><br><br><br>z
        </div>
      </div>

      <div id="content-features">
        The features content
      </div>

      <div id="content-literature">
        The literature content
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>