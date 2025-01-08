<?php
	$pageTitle = ' Security Section Frontpage';

  include __DIR__ . "/../../templates/tech/open/baseTechSecurity.tpl";
?>

<h3>Overall Security Tips</h3>
<p>Remember - Just because your anti-virus or malware scanner says you:</p>
<ul>
  <li>"Are infected" does not make it true, if it is a poor scanner</li>
  <li>"Are not infected" does not mean you are not, again ... if its a poor scanner</li>
</ul>

<?php
  include __DIR__ . "/../../techHQ/security/sections/freeAVScanners.php";
  include __DIR__ . "/../../techHQ/security/sections/malwareScanners.php";
  include __DIR__ . "/../../techHQ/security/sections/specialityScanners.php";
?>

</div>
</div>

<?php include __DIR__ . '/../../modules/tech/baseTechFooter.tpl'; ?>