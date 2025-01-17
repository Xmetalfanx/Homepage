<?php
	$sectionTitle = 'Software Section - ';

	require __DIR__ . '/../../../modules/tech/baseTechHead.tpl';
?>

<body onload="softwareData()">

	<?php require __DIR__  . '/../../../modules/tech/techHQNavMenus.tpl'; ?>

	<div class="main-section main-section--right-wide">
		<div class="sidebar">
			<?php require __DIR__ . '/../../../techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="primary-content">

		</div>
	</div>

<!-- Call to my software.js file here -->
<script src="/techHQ/scripts/software-min.js"></script>

<!-- include baseTechFooter -->
<?php require_once __DIR__ . '/../../modules/footer.tpl'; ?>
