<?php

	$sectionTitle= 'Web Browser Section - ';
	$path = getenv('DOCUMENT_ROOT'); 
  include $path . '/modules/tech/baseTechHead.tpl';

?>

<body>

    <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>
  
    <div class="main-section">
      <div class="sidebar">
        <?php include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
      </div>

      <div id="browserSection" class="primaryContent">

      </div>
    </div>

<!-- Changed from absolute path .. if something looks off, this could be why -->
<script src="/techHQ/scripts/browserAddons.js"></script>


<!-- include baseTechFooter -->
<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
