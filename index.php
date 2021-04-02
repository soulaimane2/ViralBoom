<?php get_header() ;
?>

<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-lg-9 ">
				<div class="row">
					<?php 
					while(have_posts()){
						the_post(); ?>
					
					<a href=<?php the_permalink() ?> class="postss col-lg-6">
						<?php the_post_thumbnail()?>
						<div class="pos">
							<h3><?php the_title()?></h3>
							<p>By <?php the_author() ?></p>
						</div>
					</a>
					<?php }
					?>
				</div>
					<?php /* Heeeere the pagination */
					//echo postpagi();
					previous_posts_link('<span class="prev btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 					Previous</span>');
 					next_posts_link('<span class="nex btn btn-warning">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></span>');
					?>
			</div>
			<div class="col-sm-3 col-md-12 col-lg-3 sidebar">
				<?php get_sidebar() ?>
			</div>

		</div>
	</div>
</div>
<?php require_once("inc/prefooter.php")?> 
<?php get_footer() ?>