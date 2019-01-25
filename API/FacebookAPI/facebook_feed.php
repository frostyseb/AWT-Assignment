<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	$page_id = 'metawebmarketing';
	$access_token = '000000000000000|Z-fMEaq8qWCeMUoX6fu_kuqDqOo';
	$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id . 
	'/posts?access_token=' . $access_token . '&fields=message,link,comments.summary(true),shares,full_picture,likes.summary(true),created_time&limit=5');
include ('facebook_functions.php');
posts();
	if(isset($fbdata->{'paging'}->{'next'})){
		echo '<div class="load_more"><a href="' . $next . '">Load More</a></div>';
	}
};
?>