<?php
	$pageTitle = ' Security Section Frontpage';

  require __DIR__ . "/../../templates/tech/open/baseTechSecurity.tpl";
?>

<h3>Overall Security Tips</h3>
<p>Remember - Just because your anti-virus or malware scanner says you:</p>
<ul>
  <li>"Are infected" does not make it true, if it is a poor scanner</li>
  <li>"Are not infected" does not mean you are not, again ... if its a poor scanner</li>
</ul>

<?php
  require __DIR__ . "/../../techHQ/security/sections/freeAVScanners.php";
  require __DIR__ . "/../../techHQ/security/sections/malwareScanners.php";
  require __DIR__ . "/../../techHQ/security/sections/specialityScanners.php";
?>

</div>
</div>

<?php require __DIR__ . '/../../modules/tech/baseTechFooter.tpl'; ?>