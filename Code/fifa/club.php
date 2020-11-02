<!DOCTYPE html>
<html>
<head>
<title>Club info</title>
<style>
table {
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
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
<h1 style="color:red;"><center>Club Info</center></h1>
<table class="center">
<tr>
<th>Club Id</th>
<th>Name</th>
<th>Manager</th>
<th>Homeground</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "try");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM club";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "  <tr><td>" . $row["Club_id"]. "</td>
        <td>" . $row["club_name"] . "</td>
        <td>" . $row["Manager"] . "</td>
        <td>" . $row["homeground"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<br>
<br>
<a style="color:pink" href="start.html ">Home</a><br>
</body>
</html>