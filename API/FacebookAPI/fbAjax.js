<script>
//initial AJAX function

const facebook_feed = function(){
	$.ajax({ 
			type: 'GET', 
			url: 'includes/facebook_feed.php', 
			success: function(response) { 
				$('.sk-cube-grid').hide();
				$('#ajax_response').html(response).fadeIn();
				},
			error: function(){
				$('#ajax_response').html('<p><span>Something went wrong, please hit F5 to try again!</span></p>');
				}
		});
	}
facebook_feed();

//Load more function

const facebook_feed_next = function(){
	$.ajax({ 
			type: 'GET', 
			url: 'includes/facebook_feed_next.php', 
			data: { 'feed_next':feed_next},
			success: function(response) { 
				$('.sk-cube-grid').hide();
				$('#ajax_response').append(response);				
			  	},
			error: function(){
				$('#ajax_response').html('<p><span>Something went wrong, please hit F5 to try again!</span></p>');
			  	}
		});
	}

var feed_next = '';
$(document).on('click', '.load_more a', function(e){
		e.preventDefault();
		$('.load_more a').replaceWith('<div class="sk-cube-grid"><div class="sk-cube sk-cube1"></div><div class="sk-cube sk-cube2"></div><div class="sk-cube sk-cube3"></div><div class="sk-cube sk-cube4"></div><div class="sk-cube sk-cube5"></div><div class="sk-cube sk-cube6"></div><div class="sk-cube sk-cube7"></div><div class="sk-cube sk-cube8"></div><div class="sk-cube sk-cube9"></div></div>');
		feed_next = $(this).attr('href');
		facebook_feed_next();
	});
</script>