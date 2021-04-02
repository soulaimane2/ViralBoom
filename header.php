<!DOCTYPE html>
<html>
<head>
	<meta charset=<?php bloginfo('charset')?>>
	<title><?php if (is_page()) : the_title();   else: bloginfo('name'); endif?></title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link rel="pingback" href=<?php bloginfo('pingback_url') ?>>
	<?php wp_head() ?>

</head>
<body>

	
	<div class="overeverything"> <div class="animation"></div> </div>


	<!--<nav class="vito">
		<div class="container">
			<a href="<?php echo get_home_url()?>">
				<!--<h2 class="brand">
				<i class="fa fa-line-chart" aria-hidden="true"></i>
	 			ViralBoom 
			</h2>-->
				<!--<img src="https://i.ibb.co/rG9pRBR/sss.png" style="width: 100px;

position: absolute;

top: 15px;">
			</a>
			<?php boom_menu() ?>
		</div>
	</nav>-->


	<nav class="vito navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
  <a class="navbar-brand" href="#">
    <img src="https://i.ibb.co/rG9pRBR/sss.png" width="60" height="60" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php boom_menu() ?>


</ul></div></nav>

	<?php if(!is_author()){?>
	<div class="container">
	<form action="<?php echo home_url( '/' ); ?>" method="get">
		<div class="posiit">
		    <input class="searchinp form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
		    <input class="subsearch btn btn-warning" type="submit" name="sub" value="Search"/>
		</div>
	</form>
	</div><?php }?>