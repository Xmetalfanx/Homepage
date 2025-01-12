<?php
  $sectionTitle='Desktop Section - ';

  include_once __DIR__ . '/../../../modules/linux/linuxBaseHeader.tpl';

?>

<body onload="getDesktopData()" >

    <?php include_once __DIR__ . '/../../../modules/linux/linuxNavMenu.tpl'; ?>

    <div class="main-section--right-wide">
      <div class="sidebar">
        <?php include __DIR__ . '/../../../linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
      </div>
      <div class="primary-content d-flex flex-wrap" id="desktopSection">

      </div>
    </div>

    <script src="/linuxHQ/scripts/desktopsFrontpage-min.js"></script>

  <?php include_once __DIR__ . "/../../../modules/footer.tpl"; ?>
