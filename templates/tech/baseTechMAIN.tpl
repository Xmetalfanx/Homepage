<?php
	$sectionTitle = 'Main Section - ';

	require __DIR__ . '/../../modules/tech/baseTechHead.tpl';
?>

<body>
	<?php require __DIR__ . '/../../modules/tech/techHQNavMenus.tpl'; ?>

	<!-- Why is this mainBody id CSS here?  I think this could be leftover from a "code refactoring" -->
	<div class="main-section--wide" id="mainBody">
		<div class="sidebar">
			<?php require __DIR__ . '/../../techHQ/modules/sections/techMainCol1.tpl'; ?>
		</div>
		<div class="primary-content">

		</div>


	</div>
	<!~~ at this point the main row with the menu on the left and the right column is CLOSED -->

<!-- include baseTechFooter -->
<?php require_once __DIR__ . '/../../modules/tech/baseTechFooter.tpl'; ?>
