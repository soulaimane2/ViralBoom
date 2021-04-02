<?php get_header();
		the_post();
 ?>

<div class="container">
	<div class="contpage">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<h3><?php the_title()?></h3>
			<p><?php the_content()?></p>

		</div>
	</div>
	</div>

	<br>
	<br>
	<br>
	<div class="newsletter">
	</div>

</div>
<?php require_once("inc/prefooter.php") ?>
<?php get_footer() ?>