<?php

    $title = "Search Form";


/* Write all of the GC Carpool code here */

    $content =
    '	<h1> Route Finder </h1>
	<br>
	
	
	<form title="Search Route" method="post" id="form" action="Passenger.php">
	<table id="SearchForm"; cellspacing = "2px"; cellpadding ="5%"; align ="center";>
	
	
	<tr>
		<td align="left" ><label>Departure:</label></td>
		<td align="right"><input type="text" name="departure"></td>
		<td align="left"><label>Starting Date:</label></td>
		<td align="right"><input type= "date" name ="startDate"></td>
	</tr>
	
	<tr>
	
		<td align="left"><label>Destination:</label></td>
			<td align="right"><select id="end" name ="end">
          <option value="22 Rue Eddy, quebec">22 Rue Eddy, Gatineau</option>
          <option value="2008 Wellington St, ottawa">Parliament</option>
          <option value="San Francisco, CA">San Francisco, CA</option>
          <option value="Los Angeles, CA">Los Angeles, CA</option>
        </select></td>
		<td align="left"><label>Time of departure:</label></td>
			<td align="right"><input type= "time" id="time" name ="time"></td>
	
	</tr>
	<tr>
		<td align="left"><label>Type of Music:</label></td>
			<td align="right"><select name="music">
				<option value="dmetal">Death Metal</option>
				<option value="opera">Opera</option>
				<option value="fmusic">Folk Music</option>
				<option value="Pmusic">Psychedelic Music</option>
				<option value="disco">Disco</option>
				<option value="Amusic">Ambiance Music</option>
				</select></td>
	</tr>
	<tr>
		<td></td>
		<td colspan=2; align="center"><button type="Submit">Search</button></td>
	</tr>
	</form>
	
	</table>';

    

 /* End all of the GC Carpool code here */

    $body = elgg_view_layout('one_sidebar', array(
				'content' => $content,
				'title' => $title,
				'sidebar' => elgg_view('Carpool/sidebar')
				)
    		);

	echo elgg_view_page($title, $body);

?>