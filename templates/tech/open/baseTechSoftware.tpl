<?php
	$sectionTitle = 'Software Section - ';

	require __DIR__ . '/../../../modules/tech/baseTechHead.tpl';
?>

<!-- why is this up here? -->
<script src="/techHQ/scripts/software-min.js"></script>

<body onload="softwareData()" >
	<?php require __DIR__  . '/../../../modules/tech/techHQNavMenus.tpl'; ?>

	<div class="main-section main-section--right-wide">
		<div class="sidebar">
			<?php require __DIR__ . '/../../../techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="primary-content">
