<?php
	
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
 include $siteRoot . "/templates/linux/baseLinuxDistro.tpl";

	$download 	= '<a href="http://software.opensuse.org/" target="_blank">http://software.opensuse.org/</a><br>
    <a href="http://mirrors.opensuse.org/list/all.html" target="_blank">http://mirrors.opensuse.org/list/all.html</a> ' ;

	$pageTitle = 'Gecko Linux ';

?>

<script type="text/javascript">
    var localDistroName = "gecko"; 
</script>