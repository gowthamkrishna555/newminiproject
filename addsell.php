<?php
	include('conn.php');
	session_start();
	$F_ID=$_POST['F_ID'];
	$P_ID=$_POST['P_ID'];
    $S_DATE=$_POST['S_DATE'];
   

 
	mysqli_query($conn,"insert into `sell` (F_ID,P_ID,S_DATE) values ('$F_ID','$P_ID','$S_DATE')");
	$_SESSION['USER']=$F_ID;
	header('location:sell.php');
 
?>