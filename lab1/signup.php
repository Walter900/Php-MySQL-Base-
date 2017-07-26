
<?php
	include_once 'dataBase.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
 	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
 	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    //the command to the database,
    //the behavior to the database
	$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd)
   		 VALUES('$first', '$last', '$email', '$uid', '$pwd');";
    
    //mysqli_query($a, $b) : Issue a query on a MySQL database,
    //which often involves storing or retrieving data from a table.		 
    //$a : the name or the information of the database
    //$b : the way to manipulate the database 
    mysqli_query($conn, $sql);

    header("Location: index.php?signup=success");
?>