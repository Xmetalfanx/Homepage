<?php
	$sectionTitle= 'Web Browser Section - Browser Addon Section - ';

  include __DIR__ . '/../../modules/tech/baseTechHead.tpl';
?>

<body onload="browserAddonData()">
    <?php include __DIR__ . '/../../modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php include __DIR__ . '/../../techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>

      <!-- include baseTechFooter -->
      <?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>

    </div>


    <script type="application/javascript" src="/techHQ/scripts/browserAddons-min.js"></script>



