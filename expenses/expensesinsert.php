
<?php 
 include("connect.php");
 //alert("connect");
 print("hai");
 
if(isset($_POST["submit"]))
{
    if (strlen( $_REQUEST['name'])>0 && strlen( $_REQUEST['rate'])>0 ){
$sql  = "INSERT INTO expenses(date,name,quantity,rate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name']."','" . $_REQUEST['quantity'] . "','" . $_REQUEST['rate'] . "')";

 if(mysqli_query($con,$sql)) {
echo "<script type='text/javascript'>alert('inserted successfully!');window.location='expensesreport.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}
         



    if (strlen( $_REQUEST['name1'])>0 && strlen( $_REQUEST['rate1'])>0 ){
$sql1  = "INSERT INTO expenses(date,name,quantity,rate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name1']."','" . $_REQUEST['quantity1]'] . "','" . $_REQUEST['rate1'] . "')";

 if(mysqli_query($con,$sql1)) {
echo "<script type='text/javascript'>alert('inserted successfully!');window.location='expensesreport.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
}
 

}




    if (strlen( $_REQUEST['name2'])>0 && strlen( $_REQUEST['rate'])>0 ){
$sql2  = "INSERT INTO expenses(date,name,quantity,rate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name2']."','" . $_REQUEST['quantity2'] . "','" . $_REQUEST['rate'] . "')";

 if(mysqli_query($con,$sql2)) {
	 echo "<script type='text/javascript'>alert('inserted successfully!');window.location='expensesreport.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
 
           
}




}
    
	
?>