<?php

	$sectionTitle= 'Web Browser Section - ';
	$path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechHeader.tpl';

?>

<body>
  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/techHQNavMenus.tpl'; ?>
  
  <div class="row col-12">
    <div class="col-xs-12 col-md-2">
      <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
    </div>

    <div id="browserSection" class="col-xs-12 col-md-10">

    </div>
  </div>

<!-- Changed from absolute path .. if something looks off, this could be why -->
<script src="/techHQ/scripts/browserAddons.js"></script>

	<!-- include baseTechFooter -->
	<?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechFooter.tpl'; ?>
