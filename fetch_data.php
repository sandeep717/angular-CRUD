<?php
include 'database_connection.php';

$query = mysqli_query($con,"SELECT * FROM tbl_sample ORDER BY id");

$data = array();
if($statement->execute())
{
	while($row = mysqli_fetch_array($query))
	{
		$data[] = array("id"=>$row['id'],"first_name"=>$row['first_name'],"last_name"=>$row['last_name']); 
	}

	echo json_encode($data);
}
echo json_encode('test123');
?>