<?php
	include("views/templates/header.php");
?>
	<div class="container-fluid">
		<div class="row">
			<section class="col-sm-3 col-md-2 sidebar">
				<?php include("views/templates/sidebar.php"); ?>
			</section>
			<section id="main" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="container-fluid" ng-view>
					<?php // uncomment to bring back php routing //include($pageToLoad); ?>
					<!-- {{ message }} -->
				</div>
			</section>
		</div>
	</div>
<?php	
    include("views/templates/footer.php");
?>