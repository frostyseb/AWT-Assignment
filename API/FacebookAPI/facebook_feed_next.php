<?php 
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	$feed_next = $_GET['feed_next'];
	$json_object = @file_get_contents($feed_next);	
include ('facebook_functions.php');
posts();
	if(isset($fbdata->{'paging'}->{'next'})){
		echo '<div class="load_more"><a href="' . $next . '">Load More</a></div>';
	}
}
?>