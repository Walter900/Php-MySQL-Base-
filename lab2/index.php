<?php
     include_once 'include/dataBase.inc.php'
?>


<!DOCTYPE html>
<html>

<h1>Second Lab</h1>


<?php
     $sql = "SELECT * FROM users;";
     //or $sql = "SELECT * FROM user WHERE user_first = 'Daniel';";

     $result = mysqli_query($conn, $sql);
     //mysqli_num_rows : return the number of the row
     //in the result
     $resultCheck = mysqli_num_rows($result);

     //if there is data, then spit it out
     //keep spit it out as long as there is result
     if($resultCheck > 0){
          //get the data in the database and insert each data
          //in $row as an row 
          while($row = mysqli_fetch_assoc($result)){
               //get the username
               echo $row['user_uid'] . "<br>";
          }
     }
?>

</html>