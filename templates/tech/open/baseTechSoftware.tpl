<?php
	$sectionTitle = 'Software Section - ';

	include __DIR__ . '/../../../modules/tech/baseTechHead.tpl';
?>

<!-- why is this up here? -->
<script src="/techHQ/scripts/software-min.js"></script>

<body onload="softwareData()" >
	<?php include __DIR__  . '/../../../modules/tech/techHQNavMenus.tpl'; ?>

	<div class="main-section main-section--right-wide">
		<div class="sidebar">
			<?php include __DIR__ . '/../../../techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="primary-content">
