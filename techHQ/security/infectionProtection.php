<?php
	$pageTitle = ' Security Section Frontpage';
  
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

  include $siteRoot . "/templates/tech/open/baseTechSecurity.tpl"; 

?>

<?php

  include $siteRoot . "/techHQ/security/sections/freeAVScanners.php";
  include $siteRoot . "/techHQ/security/sections/malwareScanners.php";

?>


<div class="card w-95 mx-auto shadow my-2">
  <div class="card__header">Things Pro (paid) versions of programs tend to have, the free programs do not</div>
  <div class="card__body">
    <ul>
      <li>Better tech support from company when you actually purchase the software&apos;s Pro version
        <div>This fact I even question, since at one point,  I had questions for Comodo AND Avast, and (via forum) both responded promptly, and answered my question(s) completely)   </div>
      </li>
      <li>The detection rate of freewares (like Avast and Avira) are 100% the same.  THERE IS NO DIFFERENCE.</li>
      <li>Some paid programs tend to bundle AV&apos;s + Parental Control Software + Firewalls + &quot;Spam blockers&quot; together .
        <ul>
          <li>I find that using a different program for certain tasks tend to provde better security and allows me to choose what programs I use for what task.  Some All In One products tend to not be great at everything they do.<br></li>
        </ul>
      </li>
    </ul>
  </div>
</div>



</div>
</div>

<?php require $siteRoot . "/modules/tech/baseTechFooter.tpl"; ?>
