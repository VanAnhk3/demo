<?php
require 'connect.php';
mysqli_set_charset($conn,'UTF8');
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
{
echo"FlightID:".$row["id"].
     "Origin:".$row["origin"].
     "Destination:".$row["destination"].
     "Duration:".$row["duration"]."<br>"
}
}