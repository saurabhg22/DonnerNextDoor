<?php
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
	$emparray = array();
	require 'connect.php';
	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = mysqli_real_escape_string($conn, $_GET["id"]);
		$dQuery = "SELECT * FROM `donater` WHERE `id` = '".$id."'";
			if($dQuery_run = mysqli_query($conn, $dQuery)){
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

				$rQuery = "SELECT * FROM `reciever` ORDER BY `deadline`";

	     		if($result = mysqli_query($conn, $rQuery)){
					if($result->num_rows == 0){
						echo "No results were found!!";
					}
					else{
						
						while($row = mysqli_fetch_array($result)) {

							if(strtolower($row['organ']) == strtolower($organ) && strtolower($row['bloodgrp']) == strtolower($bloodgrp) && strtolower($row['religion']) == strtolower($religion) && $row['deadline'] >= $deadline){
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