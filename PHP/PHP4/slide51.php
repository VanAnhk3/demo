<?php
require 'connect.php'
$sql = "INSERT INTO flights(Origin,Destination,Duration) VALUES ('Hà Nội','Paris','4000')";
if ($conn->real_query($sql)==TRUE)
{
    echo "New flight created successfully";

}
else
{
    echo "Error:".$sql."<br>".$conn->error;

}
$conn->close();

?>