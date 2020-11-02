<?php
$name = $_POST['name'];
$nationality = $_POST['nationality'];
$position = $_POST['position'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$speed = $_POST['speed'];
$club = $_POST['club'];
$curve = $_POST['curve'];
$pass = $_POST['pass'];
$stamina = $_POST['stamina'];
$control = $_POST['control'];
$tg = $_POST['tg'];
$hg = $_POST['hg'];
$gbp = $_POST['gbp'];



if (!empty($name) || !empty($nationality) || !empty($position) || !empty($dob) 
                  || !empty($age) || !empty($speed) || !empty($curve) || !empty($pass)  || !empty($club)
                  || !empty($stamina) || !empty($control) || !empty($tg) || !empty($hg) || !empty($gbp) )
 
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
     $query1 = "INSERT Into player(player_name, nationality, position, dob, age) values('$name', '$nationality', '$position', '$dob', '$age')";
     $run1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));

     $id = mysqli_insert_id($conn);

     $query2 = "INSERT Into abilities(player_id,speed, curve, pass, stamina, ball_control) values('$id', '$speed', '$curve', '$pass', '$stamina', '$control')";
     $run2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));

     $query3 = "INSERT Into player_stats(player_id, goals, hgoal, penalty) values('$id', '$tg', '$hg', '$gbp')";
     $run3 = mysqli_query($conn,$query3) or die(mysqli_error($conn));

     $query4 = "INSERT Into playfor(player_fk,club_fk) values('$id', '$club')";
     $run4 = mysqli_query($conn,$query4) or die(mysqli_error($conn));

     if ($run1 && $run2 && $run3 && $run4){
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


<!DOCTYPE html>
<a style="color:pink" href="start.html ">Home</a><br>

</html>