<?php 
	$fbdata = json_decode($json_object);
	$posts = '';
	if(isset($fbdata->{'paging'}->{'next'})){
		$next = $fbdata->{'paging'}->{'next'};
	}
function posts(){
		global $fbdata;
		global $posts;
		foreach ($fbdata->data as $post ){
			$posts .= '<div class="post clear">';
			$posts .= '<img src="' . $post->full_picture . '"/>';
			if(isset($post->message)){
				$posts .= '<p><span>' . substr($post->created_time,5,2). '/' . substr($post->created_time,8,2). '/' . substr($post->created_time,0,4) . '</span> - ' . $post->message . '</p>';
			}
			$posts .= '<ul>';
			if(isset($post->{'likes'}->{'summary'}->{'total_count'})){
				$posts .= '<li><img src="images/facebook_like_icon.png"/>' . $post->{'likes'}->{'summary'}->{'total_count'} . '</li>';
			}
			if(isset($post->{'comments'}->{'summary'}->{'total_count'})){
				$posts .= '<li><img src="images/facebook_comment_icon.png"/>' . $post->{'comments'}->{'summary'}->{'total_count'} . '</li>';
			}
			if(isset($post->{'shares'}->{'count'})){
				$posts .= '<li><img src="images/facebook_shared_icon.png"/>' . $post->{'shares'}->{'count'} . '</li>';
			}
			$posts .= '</ul>';
			if(isset($post->link)){
				$posts .= '<a href="' . $post->link . '" target="_blank">View on Facebook</a>';
			}
			$posts .= '</div><hr>';
			}
		echo $posts;
	}
?>