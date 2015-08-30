<?php
	/* gets the contents of a file if it exists, otherwise grabs and caches */
	function get_content($file, $url) {
		$content = file_get_contents($url);
		file_put_contents($file,$content);
	}
	$link = get_content("whatpulse.json",'http://api.whatpulse.org/user.php?UserID='.'PeeHole'.'&format=json');
?>