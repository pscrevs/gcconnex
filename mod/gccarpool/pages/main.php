<?php
	elgg_enable_simplecache();
    $title = "GCcarpool";
    $imageUrl = elgg_get_simplecache_url('111.jpeg');
    $test = "this is a test";
    $elgg_site_url = elgg_get_site_url();
    $dirname = dirname(__FILE__);

/* Write all of the GC Carpool code here */

    $content =
    "	<center><h1>Welcome to GCcarpool!</h1></center>
	<center><img src='$elgg_site_url/mod/gccarpool/pages/111.jpeg' alt='uni logo' style='width:369px;height:369px'></center>
	<center><h1><font size='3'>Are you a driver or passenger?</font></h1></center>
	
	<form method='post' action='./Driver'>
		<center><input type='submit' value='Driver' name='1'></center><br>
		<center><input type='submit' value='Passenger' name='2'></center>
	</form>";

    

 /* End all of the GC Carpool code here */

    $body = elgg_view_layout('one_sidebar', array(
				'content' => $content,
				'title' => $title,
				'sidebar' => elgg_view('Carpool/sidebar')
				)
    		);

	echo elgg_view_page($title, $body);

?>