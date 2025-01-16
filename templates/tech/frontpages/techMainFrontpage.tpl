<?php
	$sectionTitle = 'Software Section - ';

	include __DIR__ . '/../../../modules/tech/baseTechHead.tpl';
?>

<body>
	<div>
		<?php require __DIR__  . '/../../../modules/tech/techHQNavMenus.tpl'; ?>

			<div class="main-section main-section--right-wide">
				<div class="sidebar">
					<?php require __DIR__ . '/../../../techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
				</div>


				<div class="primary-content">
				</div>
			</div>


	<!-- include baseTechFooter -->
	<?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>
