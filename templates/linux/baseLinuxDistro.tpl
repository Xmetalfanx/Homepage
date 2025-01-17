<?php
  $sectionTitle='Distrobution Section - ';

  require_once __DIR__ . '/../../modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDistroData()" >
  <?php require_once __DIR__ . '/../../modules/linux/linuxNavMenu.tpl'; ?>

  <div class="main-section--right-wide">
      <div class="sidebar">
        <?php require_once __DIR__ . '/../../linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
      </div>

      <!-- id=linux-primary-content, is used in JS files to display content -->
      <div id="linux-primary-content" class="primary-content">

      </div>
    </div>

  <script src="/linuxHQ/scripts/distros-min.js"></script>

  <?php require_once __DIR__ . '/../../modules/footer.tpl'; ?>