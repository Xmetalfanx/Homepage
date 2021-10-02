<?php

  $pageTitle = 'What is Linux';

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

  include $siteRoot . "/templates/linux/baseLinuxTutorials.tpl";
?>

  <span class="boldUnderline">What is Linux?</span>

  <p>Linux is an Operating System (the  &ldquo;Master Software&rdquo; that runs all the other software on your machine), which I
  responsible mainly for the way the user interacts with the computer's hardware ... so as far as the computer user and the hardware of
  the computer go, the Operating System is the &quot;middle-man&quot; thats in between the two.</p>

  <span class="italics">(Programs you may be thinking of right now, RUN ON an Operating System) </span>


  <p>Microsoft Windows, no matter which version, and Apple's  Mac OS's are known to many people  &hellip; though some people
  overlook Linux as a  	100% FREE  alternative to Microsoft or Apple Operating Systems. </p>
