<!DOCTYPE html>
<html>


<?php
$name = $_POST['name'];
$manager = $_POST['manager'];
$ground = $_POST['ground'];
$win = $_POST['win'];
$loss = $_POST['loss'];
$wah = $_POST['wah'];



if (!empty($name) || !empty($manager) || !empty($ground) || !empty($win) || !empty($loss) || !empty($wah) )
 
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "try";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $query1 = "INSERT Into club(club_name, Manager, homeground) values('$name', '$manager', '$ground')";
     $run1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));

     $id = mysqli_insert_id($conn);

     $query2 = "INSERT Into stats(Club_id, wins, losses, wah) values('$id', '$win', '$loss', '$wah')";
     $run2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));

     if ($run1 && $run2){
      echo "Record inserted sucessfully";
     }
     else {
        echo "form not submitted";
     }



    } 
     $conn->close();
    }
else {
    echo "All field are required";
    die();
}
?>

<a style="color:pink" href="start.html ">Home</a><br>
</html>