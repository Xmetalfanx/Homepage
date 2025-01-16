<?php
	$sectionTitle= 'Web Browser Section - ';
	
  require __DIR__ . '/../../modules/tech/baseTechHead.tpl';
?>

<body>
    <?php require __DIR__ . '/../../modules/tech/techHQNavMenus.tpl'; ?>

    <div class="main-section">
      <div class="sidebar">
        <?php require __DIR__. '/../../techHQ/modules/sections/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primary-content">

      </div>
    </div>

<!-- Changed from absolute path .. if something looks off, this could be why -->
<script src="/techHQ/scripts/browserAddons-min.js"></script>


<!-- include baseTechFooter -->
<?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>
