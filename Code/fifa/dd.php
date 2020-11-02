<!DOCTYPE html>
<html>
<head>
<title>Delete Player</title>
<style>
table {
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
table.center {
    margin-left:auto; 
    margin-right:auto;
  }
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body style="background-image: radial-gradient(circle, #000000, #0f0e0e, #181718, #202021, #28282a);">
<h1 style="color:red;"><center>Player Info</center></h1>
<table class="center">
<tr>
<th>Id</th>
<th>Name</th>
<th>Operation</th>
<th>Edit</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "try");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT player_id,player_name FROM player";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "  <tr>
        <td>" . $row["player_id"]. "</td>
        <td>" . $row["player_name"] . "</td>
        <td><a style=color:purple href='delete.php?rn=$row[player_id]'>Delete</a></td>
        <td><a style=color:purple href='update1.php?rn=$row[player_id]'>Update</a></td>
        </tr>";
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