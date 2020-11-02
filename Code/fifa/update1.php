<!DOCTYPE HTML>
<html>
<head>
  <title>Player Register Form</title>
  <style type="text/css">
  
  *{
      margin:0;
      padding: 0;
  }
  body{
      background-image:url(ronaldo.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      background-size: cover;
      font-family: sans-serif;
      margin-top: 40px;
  }

  .playeri{
    width:800px;
   		background-color:rgb(0,0,0,0.6);
   		margin:auto;
   		color:white;
   		padding:10px 0px 10px 0px;
   		text-align:center;
   		border-radius:15px 15px 0px 0px;
  }
  main{
    background-color:rgb(0,0,0,0.5);
   width:800px;
   margin:auto;
  }
  form{
      padding:10px;
  }
  #name{
      width:100%;
      height: 70px;
  }
  .p1{
    margin-left:25px;
   	margin-top:30px;
   	width:125px;
   	color:black;
   	font-size:18px;
   	font-weight:700;
  }
  .namelabel{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }

  .nationality{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .dob{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .age{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .position{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }

  .playera{
    width:800px;
   		background-color:rgb(0,0,0,0.6);
   		margin:auto;
   		color:#FFFFFF;
   		padding:10px 0px 10px 0px;
   		text-align:center;
   		border-radius:15px 15px 0px 0px;
  }
  main2{
    background-color:rgb(0,0,0,0.5);
   width:800px;
   margin:auto;
  }
  form{
      padding:10px;
  }
  #name2{
      width:100%;
      height: 70px;
  }
  .p2{
    margin-left:25px;
   	margin-top:30px;
   	width:125px;
   	color:black;
   	font-size:18px;
   	font-weight:700;
  }
  .speed{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }

  .curve{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .pass{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .stamina{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .control{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  
  .players{
    width:800px;
   		background-color:rgb(0,0,0,0.6);
   		margin:auto;
   		color:#FFFFFF;
   		padding:10px 0px 10px 0px;
   		text-align:center;
   		border-radius:15px 15px 0px 0px;
  }
  main3{
    background-color:rgb(0,0,0,0.5);
   width:800px;
   margin:auto;
  }
  form{
      padding:10px;
  }
  #name3{
      width:100%;
      height: 70px;
  }
  .p3{
    margin-left:25px;
   	margin-top:30px;
     align-content: center;
   	width:125px;
   	color:black;
   	font-size:18px;
   	font-weight:700;
  }
  .goals{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }

  .highest{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  .penalty{
    position:relative;
   	left:100px;
   	line-height:40px;
   	border-radius:6px
  }
  

 table.center {
    margin-left:auto; 
    margin-right:auto;
  } 
  </style>
</head>
<body>
   <div class="playeri"><h1><center>Player Info</center></h1></div>
<div class="main">
 <form action="" method="POST">
  <table class="center">
   <tr>
    <td class="p1"> Name </td>
    <td><input class="namelabel" type="text" name="name" required></td>
   </tr>
   <tr>
    <td class="p1"> Nationality </td>
    <td><input class="nationality" type="text" name="nationality" required></td>
   </tr>

   <tr>
    <td class="p1"> DOB </td>
    <td><input class="dob" type="date" min="1970-01-01" max="2005-01-01" name="dob" required></td>
   </tr> 
   <tr>
    <td class="p1"> Age </td>
    <td><input class="age" type="number" min="16" max="70" name="age" required></td>
   </tr>
   <tr>
    <td class="p1"> Club </td>
    <td><input class="age" type="number" name="club" required></td>
   </tr>

   <tr>
    <td class="p1">Position </td>
    <td>
     <select name="position" required>
      <option class="position" selected hidden value="">Select Code</option>
      <option value="Goalkeeper">Goalkeeper</option>
      <option value="Defender">Defender</option>
      <option value="Midfielder">Midfielder</option>
      <option value="Forward">Forward</option>
     </select>
    </td>
   </tr>
  </table>
</div>


<br>
<br>
<br>
<div class="playera"><h1><center>Player Ability</center></h1></div>
<div class="main2">
<table class="center">
    <tr>
        <td class="p2">Speed </td>
        <td><input class="speed" type="number" max="99" name="speed" required></td>
    </tr>    
    <tr>
        <td class="p2">Curve </td>
        <td><input class="curve" type="number" max="99" name="curve" required></td>
    </tr>
    <tr>
        <td class="p2">Pass </td>
        <td><input class="pass" type="number" max="99" name="pass" required></td>
    </tr>
    <tr>
        <td class="p2">Stamina </td>
        <td><input class="stamina" type="number" max="99" name="stamina" required></td>
    </tr>
    <tr>
        <td class="p2">Control </td>
        <td><input class="control" type="number" max="99" name="control" required></td>
    </tr>

</table>
<br>
<br>
<br>
<br>

<div class="players"><h1><center>Player Stats</center></h1></div>
<div class="main3">
<table class="center">
    <tr>
        <td class="p3">Total Goals </td>
        <td><input class="goals" type="number" max="9999" name="tg" required></td>
    </tr>
    <tr>
        <td class="p3">Highest Goals </td>
        <td><input class="highest" type="number" max="10" name="hg" required></td>
    </tr>
    <tr>
        <td class="p3">Goals by Penalty </td>
        <td><input class="penalty" type="number" max="999" name="gbp" required></td>
    </tr>
</table>
<br>
<br>
<br>
<td><center><input type="submit" name="update" value="Update"></center></td>


</form>
<br>
<br>
<a style="color:pink" href="start.html ">Home</a><br>
</body>
</html>

<?php

if(isset($_POST['update']))
{
$id = $_GET['rn'];
$name = $_POST['name'];
$nationality = $_POST['nationality'];
$position = $_POST['position'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$club = $_POST['club'];
$speed = $_POST['speed'];
$curve = $_POST['curve'];
$pass = $_POST['pass'];
$stamina = $_POST['stamina'];
$control = $_POST['control'];
$tg = $_POST['tg'];
$hg = $_POST['hg'];
$gbp = $_POST['gbp'];

$conn = new mysqli("localhost", "root", "", "try");

if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
  $query1 = "UPDATE player 
             SET player_name='$name',nationality='$nationality', position='$position', dob='$dob', age='$age'
             WHERE player_id='$id' " ;
  $run1 = mysqli_query($conn,$query1) or die(mysqli_error($conn));
 
  $query2 = "UPDATE abilities 
              SET speed='$speed', curve='$curve', pass='$pass', stamina='$stamina', ball_control='$control'
              WHERE player_id='$id' " ;
  $run2 = mysqli_query($conn,$query2) or die(mysqli_error($conn));

  $query3 ="UPDATE player_stats
             SET goals='$tg', hgoal='$hg', penalty='$gbp'
             WHERE player_id='$id' " ;
  $run3 = mysqli_query($conn,$query3) or die(mysqli_error($conn));

  $query4 ="UPDATE playfor
  SET club_fk='$club'
  WHERE player_fk='$id' " ;
$run4 = mysqli_query($conn,$query4) or die(mysqli_error($conn));

  if ($run1 && $run2 && $run3 && $run4){
   echo "Record Updated sucessfully";
  }
  else {
     echo "form not submitted";
  }
 }

}
?>