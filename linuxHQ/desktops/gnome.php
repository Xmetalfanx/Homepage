<script type="text/javascript">
	var localDEName = "gnome";
</script>

<?php

	$sectionTitle = "Desktop Environments - ";
	$pageTitle = 'Gnome 3/Gnome Shell ';

  
  switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = 'xmetal.x10.mx';
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
