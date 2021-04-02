<?php get_header();?>

<div class="cover"><div class="coverlay"></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="ikl">
				<?php echo get_avatar(get_the_author_meta('ID'));?>
				<h3> <?php the_author() ?> </h3>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="icauthor">
			<ul style="list-style: none;">
				<li>
					<i class="fa fa-file-text" aria-hidden="true"></i> Posts
					<?php echo count_user_posts(get_the_author_meta('ID')) ?>
				</li>
				<li>
					<i class="fa fa-comment" aria-hidden="true"></i> Comments 
					<?php 
					$comment_count = array(
						'user_id' => get_the_author_meta('ID'),
						'count' => true
					);
					echo get_comments($comment_count);
					?>
				</li>
			</ul>
		</div>
		</div>
	</div>
</div>
<div class="desc">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3><span> Who's <?php the_author() ?> </span></h3>
				<p>
					<?php echo get_the_author_meta("description") ?>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="authorpost">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3><span> This author's posts </span></h3>
			</div>
				<div class="clearfix"></div>
				<!-- Author Posts -->
				<?php
				$posts_au = new WP_Query(array(
					'author' => get_the_author_meta('ID'),
					'post_per_page' => -1
				));

				while($posts_au->have_posts()){
					$posts_au->the_post(); ?>

				<div class="authpo">
					<div class="row">
						<div class="authpoim col-md-3"><?php the_post_thumbnail(); ?></div>
						<p class="col-md-7"> <a href="<?php the_permalink()?>"><?php the_title() ?></a></p>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php }
				?>
		</div>
	</div>
</div>

<div class="clearfix"></div>
<?php 
require_once("inc/prefooter.php");
get_footer();
?>