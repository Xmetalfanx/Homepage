<?php
  $sectionTitle='Desktop Section - ';

  require_once __DIR__ . '/../../../modules/linux/linuxBaseHeader.tpl';

?>

<body onload="getDesktopData()" >

    <?php require_once __DIR__ . '/../../../modules/linux/linuxNavMenu.tpl'; ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php require __DIR__ . '/../../../linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
      </div>
      <div class="primary-content d-flex flex-wrap" id="desktopSection">

      </div>
    </div>

    <script src="/linuxHQ/scripts/desktopsFrontpage-min.js"></script>

  <?php require_once __DIR__ . "/../../../modules/footer.tpl"; ?>
