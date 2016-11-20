<?php

 header('Access-Control-Allow-Origin: *');  
	$emparray = array();
	function utf8ize($d) {
	    if (is_array($d)) 
	        foreach ($d as $k => $v) 
	            $d[$k] = utf8ize($v);

	     else if(is_object($d))
	        foreach ($d as $k => $v) 
	            $d->$k = utf8ize($v);

	     else 
	        return utf8_encode($d);

	    return $d;
	}
	require 'connect.php';
	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = mysqli_real_escape_string($conn, $_GET["id"]);
		$rQuery = "SELECT * FROM `reciever` WHERE `id` = '".$id."'";
			if($rQuery_run = mysqli_query($conn, $rQuery)){
				$row=mysqli_fetch_assoc($rQuery_run);
				$emparray[] = $row;
				$docQuery = "SELECT * FROM `doctor` ORDER BY RAND() LIMIT 1";
				if($docQuery_run = mysqli_query($conn, $docQuery)){
					$row=mysqli_fetch_assoc($docQuery_run);
					$emparray[] = $row;
				}
				
				
				$organ=$row['organ'];
				$religion=$row['religion'];
				$bloodgrp=$row['bloodgrp'];
				$deadline=$row['deadline'];

				$dQuery = "SELECT * FROM `donater` ORDER BY `deadline`";

	     		if($result = mysqli_query($conn, $dQuery)){
					if($result->num_rows == 0);
					else{
						while($row = mysqli_fetch_array($result)) {

							if(strtolower($row['organ']) == strtolower($organ) && strtolower($row['bloodgrp']) == strtolower($bloodgrp) && strtolower($row['religion']) == strtolower($religion) && $row['deadline'] <= $deadline ){
							    
							    $emparray[] = $row;
							}
						}
						$jsonData = json_encode(utf8ize($emparray));
						echo $jsonData;

						
					}
				}

				else{
					echo "Query cant run";
				}

			}
	}



?>