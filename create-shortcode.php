<?php
function custom_shortcode(){
	return '
	 	<div id="brands-container">
			<div class="brand">
		 		do stuff here
	   		</div>
	     	</div>
      	'
}
add_shortcode('useThisOnWordPress', 'custom_shortcode');
?>
