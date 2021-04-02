<?php get_header() ?>



<div class="container">
	<div class="contactina">
		<h2>  Contact Us  </h2>
		<form action="#" method="post">
			<label> Fullname : </label>
			<input class="form-control" name="Fullname" type="text" >
			<label> Email  : </label>
			<input class="form-control" name="Email" type="email" >
			<label> Object  : </label>
			<input class="form-control" type="text" name="obj">
			<label> Message : </label>
			<textarea class="form-control" name="message" style="margin-bottom: 15px"></textarea>
			<input class="btn btn-warning btn-lg btn-block" type="submit" name="sub" >
		</form>
	</div>
</div>
<?php 

	$name = wp_strip_all_tags($_POST['Fullname']);
	$email = wp_strip_all_tags($_POST['Email']);
	$message = wp_strip_all_tags($_POST['message']);
	$obj = wp_strip_all_tags($_POST['obj']);
	wp_insert_post(array(
		'post_title' => $obj, 
		'post_content' => $message, 
		'post_author' => 1,
		'post_status' => 'draft',
		'post_category' => array( 23 ),
		'meta_input' => array(
			'Fullname' => $name,
		    'email' => $email
		)
	));

 ?>

<?php require_once("inc/prefooter.php") ?>
<?php get_footer() ?>