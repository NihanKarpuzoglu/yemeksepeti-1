<?php
	include "config.php";
	
	
	//function fill_cities_select_box()
	//{ 
	$output = '';
	$cities="SELECT * FROM cities";
		//$statement = $conn->prepare($cities);
		
	$result = $conn->query($cities);
	foreach($result as $city)
	{
		$output .= '<option value="'.$city["city"].'">'.$city["city"].'</option>';
	}
	echo $output
		//return $output;
	//}
	
?>