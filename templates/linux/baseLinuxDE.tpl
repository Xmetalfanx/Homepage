<?php
	$sectionTitle="LinuxHQ Distro Section - ";
	include_once __DIR__ . '/../../modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDesktopData()" >
  <?php include_once __DIR__ . '/../../modules/linux/linuxNavMenu.tpl'; ?>
  <div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php include_once __DIR__ . '/../../linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
    </div>
    <div id="desktopSection" class="primary-content" >

    </div>
  </div>

<script src="/linuxHQ/scripts/desktops-min.js"></script>

<?php include_once __DIR__ . '/../../modules/footer.tpl'; ?>
