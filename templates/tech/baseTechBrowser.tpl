<?php

	$sectionTitle= 'Web Browser Section - ';
  include($path . '/modules/tech/baseTechHead.tpl');

?>

<body onload="browserData()">
    <div >
      <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>
      
      <div class="mainSection">
        <div class="col-xs-12 col-md-3 col-xl-2">
          <?php include $path . '/techHQ/modules/techBrowsersCol1.tpl'; ?>
        </div>

        <div id="browserSection" class="col-xs-12 col-md-9 col-xl-10">

        </div>
      </div>


    <script type="application/javascript" src="/techHQ/scripts/browsers.js"></script>


    <!-- include baseTechFooter -->
    <?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
