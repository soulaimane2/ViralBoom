<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<?php if( have_posts() ){
				while ( have_posts() ) {
					the_post(); ?>

				<div class="cont col-sm-9">
					<div class="imgd">
						<?php // the_post_thumbnail()?>
						<div class="overlay"></div>
					</div>
					<h3> <?php the_title() ?> </h3>
					<p><?php the_content() ?></p>
				</div>
				<!-- The Post Pagination -->
				<!--div class="banner col-sm-12">728x90</div-->
				<?php wp_link_pages(array(
					'before'           => '<div class="postPag">',
					'after'            => '</div>',
					'link_after'       => '',
					'next_or_number'   => 'next',
					'separator'        => '',
					'nextpagelink'     => __( '<span class="nextbtn btn btn-warning"> Next <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>', 'twentyfourteen'),
					'previouspagelink' => __( '<span class="prevbtn btn btn-warning"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Previous</span>', 'twentyfourteen' ),
					'pagelink'         => '%',
					'echo'             => 1
				));
					 ?>
					 <div class="clearfix"></div>
					 <!--div class="banner col-sm-12">728x90</div-->
				<!-- // The Post Pagination -->
			<?php }} ?>
			<div class="clearfix"></div>
			<hr>
			<div class="about">
				<?php echo get_avatar(get_the_author_meta('ID'))?>
				<?php the_author_posts_link()?>
				<?php echo get_the_author_meta('description')?>
			</div>
			<hr>
			<h3 style="text-align: center;padding: 15px"> What's Trending </h3>
			<?php 

			$hot_post = new WP_Query(array(
				'orderby'=>'comment_count',
				'post_per_page' => 9,

			));
			while ($hot_post->have_posts()) {
				$hot_post->the_post();?>
				<div class="hotpost col-lg-4 col-sm-4">
				<?php echo get_the_post_thumbnail();?>
				<a href=<?php the_permalink() ?>><h3>
				<?php echo get_the_title();?>
				</h3></a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<hr>
			<?php 
			//comments_number();

			comments_template();

			 ?>



		</div>
	</div>
</div>
<?php require_once("inc/prefooter.php") ?>
<?php get_footer() ?>
