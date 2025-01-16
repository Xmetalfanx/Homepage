<?php
	$sectionTitle= 'Web Browser Section - Browser Addon Section - ';

  include __DIR__ . '/../../modules/tech/baseTechHead.tpl';
?>

<body onload="browserAddonData()">
    <?php require __DIR__ . '/../../modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php require __DIR__ . '/../../techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>

      <!-- include baseTechFooter -->
      <?php require $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>

    </div>


    <script type="application/javascript" src="/techHQ/scripts/browserAddons-min.js"></script>



