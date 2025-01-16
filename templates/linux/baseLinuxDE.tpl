<?php
	$sectionTitle="LinuxHQ Distro Section - ";
	require_once __DIR__ . '/../../modules/linux/linuxBaseHeader.tpl';
?>

<body onload="getDesktopData()" >
  <?php require_once __DIR__ . '/../../modules/linux/linuxNavMenu.tpl'; ?>
  <div class="main-section main-section--right-wide">
    <div class="sidebar">
      <?php require_once __DIR__ . '/../../linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
    </div>
    <div id="desktopSection" class="primary-content" >

    </div>
  </div>

<script src="/linuxHQ/scripts/desktops-min.js"></script>

<?php require_once __DIR__ . '/../../modules/footer.tpl'; ?>
