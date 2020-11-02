<?php

    $id = $_GET['rn'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "try";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $query1 = "DELETE FROM player WHERE player_id='$id' " ;
     $run1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
    
    if ($run1){
        echo "<font color='green'>Record Deleted sucessfully";
       }
    else {
          echo "<font color='red'>Failed to delete record";
       }
    }
?>

<!DOCTYPE html>
<a style="color:pink" href="start.html ">Home</a><br>
</html>