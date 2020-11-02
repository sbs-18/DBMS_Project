<!DOCTYPE html>
<html>
<head>
<title>Player info</title>
<style>
table {
border-collapse: collapse;
width: 80%;
color:  #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color:  #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
table.center {
    margin-left:auto; 
    margin-right:auto;
  }

</style>
</head>
<body style="background-image: radial-gradient(circle, #000000, #0f0e0e, #181718, #202021, #28282a);">
<h1 style="color:red;"><center>Player Info</center></h1>
<table class="center">


<tr>
<th>Id</th>
<th>Name</th>
<th>Nationality</th>
<th>Position</th>
<th>DOB</th>
<th>Age</th>
<th>CLub</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "try");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "with 
        temp(pid,clubname) as (select playfor.player_fk,club.club_name from playfor join club on playfor.club_fk=club.Club_id) SELECT * FROM player, temp WHERE player.player_id = temp.pid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "  <tr><td>" . $row["player_id"]. "</td>
        <td>" . $row["player_name"] . "</td>
        <td>" . $row["nationality"] . "</td>
        <td>" . $row["position"] . "</td>
        <td>" . $row["dob"] . "</td>
        <td>" . $row["age"] . "</td>
        <td>" . $row["clubname"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<br>
<br>
<br>
<a style="color:pink" href="start.html ">Home</a><br>
</body>
</html>