<?php
	include 'common.php';
	$sel=mysqli_query($con,"select * from item");
	$data=array();
	
	while($row=mysqli_fetch_array($sel)){
		$data[]=$row;
		//$data=array("id"=>$row['id'],"bestDish"=>$row['bd_name'],"cost"=>$row['cost'],"name"=>$row['name'],"address"=>$row['address'],"location"=>$row['location'],"category"=>$row['category'],"vote"=>$row['vote'],"Cuisine"=>$row['Cuisine'],"hours"=>$row['hours'],"image"=>$row['r_image'],"d_image"=>$row['d_image']);
	}
	echo json_encode($data);
?>