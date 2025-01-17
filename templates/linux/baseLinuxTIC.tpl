<?php
  $sectionTitle = 'Linux Themes/Icon/ Section - ';

	require_once __DIR__ . '/../../modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getTICData()" >

    <?php require_once __DIR__ . '/../../modules/linux/linuxNavMenu.tpl'; ?>

      <div class="main-section main-section--right-wide">
        <div class="sidebar">
            <?php require_once __DIR__ . '/../../linuxHQ/modules/sections/linuxTICCol1.tpl'; ?>
        </div>

        <div id="ticsection" class="primary-content">

        </div>
      </div>

    <script src="/linuxHQ/scripts/ticSection-min.js"></script>

<?php require_once __DIR__ . "/../../modules/footer.tpl"; ?>
