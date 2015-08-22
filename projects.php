<!DOCTYPE HTML>
<html>
	<head>
		<?php include("head.php");?>
	</head>
	<body>
		<?php include("topbar.php");?>
		<div class="boxwrap small-12 medium-10 large-10 small-centered columns">
			<?php include("header.php");?>
			<div class="row projects large show-for-large-up">
				<?php include("projectslist.php");?>
			</div>
			<div class="row projects medium show-for-medium-only">
				<?php include("projectslist.php");?>
			</div>
			<div class="row projects small show-for-small-down">
				<?php include("projectslist.php");?>
			</div>
		</div>
		<?php include("footer.html");?>
	</body>
</html>