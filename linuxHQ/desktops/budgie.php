<script type="text/javascript">
    var localDEName = "budgie";
</script>

<?php

	$pageTitle = 'Budgie ';
	$sectionVar = "DE";

  
  switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html';
        break;
    case 'xmetal.awardspace.us':
        $siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
        break;
    default:
        $siteRoot = 'local.domain';
        break;
  }
 include $siteRoot . "/templates/linux/baseLinuxDE.tpl";

?>
