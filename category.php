<?php get_header() ?>
<div class="container">
	<div class="content">
		<h2 class="cattitle"> <?php single_cat_title() ?> </h2>
		<div class="row">
			<div class="col-md-9">
				<?php if( have_posts() ){
					while ( have_posts() ) {
						the_post(); ?>

				
				<div class="thepost">
					<h3> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h3>
					<div class="infopost">
						<span>
							<i class="fa fa-user-circle-o" aria-hidden="true"></i> 
							<?php  the_author_posts_link() ?> 
						</span>
						<span>
						<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('g:ia') ?> 
						</span>
						<span> 
							<i class="fa fa-comments" aria-hidden="true"></i> <?php comments_popup_link('0 comment','1 comment','%d comments')?>
						</span>
					</div>
					<?php the_post_thumbnail() ?>
					<p>
						<?php //the_excerpt() ?> 
					</p>
					<!--button class="btn btn-info btn-lg btn-block bnt"><a href="<? //php get_permalink() ?>"> 
							Read More  <i class="fa fa-arrow-right" aria-hidden="true"></i>
						 </a></button-->
				</div>
					<?php }}?>
			</div>


			<div class="col-sm-3">
				<?php get_sidebar() ?>
			</div>
			



		</div>
	</div>
</div>
<?php require_once("inc/prefooter.php") ?>
<?php get_footer() ?>