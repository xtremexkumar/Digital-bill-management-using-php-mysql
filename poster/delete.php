<?php
//including the database connection file
include("connect.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM poster WHERE id=$id");

//redirecting to the display page (index.php in our case)
echo "<script type='text/javascript'>alert('deleted successfully!');window.location='posterreport.php';</script>";

?>

