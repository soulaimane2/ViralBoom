
<?php 


	/*
		comments form 
	*/

	if(comments_open()){ ?>
	<ul class="commen">
	<?php 


		$come = array(
			'max_depth' => '3',
			'type' => 'comment',
			'per-page' => '5',
			'avatar_size' => "64",
			'revers_top_level' => true 
		);
		$commentForm_Class = array(
			'class_form' => 'formCont',
			'title_reply'=> 'leave a comment',
			'comment_notes_before' => '',
			'title_reply_to' => ''
		);
		wp_list_comments($come);
		comment_form($commentForm_Class);
	 } ?>
	</ul>	
