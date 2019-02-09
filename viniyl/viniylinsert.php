
<?php 
 include("connect.php");
 //alert("connect");
 print("hai");
 
if(isset($_POST["submit"]))
{
    if (strlen( $_REQUEST['name'])>0 && strlen( $_REQUEST['sno'])>0 ){
$sql  = "INSERT INTO viniyl(sno,date,Name,Contact,size,totalsqr,rate,subtotal,paid,pending) VALUES ('" . $_REQUEST['sno']."','" . $_REQUEST['tdate']."','" . $_REQUEST['name'] . "','" . $_REQUEST['Contact'] . "','" . $_REQUEST['Size'] . "','" . $_REQUEST['Totsqr'] . "','" . $_REQUEST['Rate'] . "','" . $_REQUEST['SubTotal'] . "','" . $_REQUEST['paid'] . "','" . $_REQUEST['pending'] . "')";
 
 
 
 if(mysqli_query($con,$sql)) {
echo "<script type='text/javascript'>alert('inserted successfully!');window.location='viniylreport.php';</script>";
} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
 

	}

if (strlen( $_REQUEST['name1'])>0 && strlen( $_REQUEST['sno1'])>0 ){
$sql1  = "INSERT INTO viniyl(sno,date,Name,Contact,size,totalsqr,rate,subtotal,paid,pending) VALUES ('" . $_REQUEST['sno1']."','" . $_REQUEST['tdate']."','" . $_REQUEST['name1'] . "','" . $_REQUEST['Contact1'] . "','" . $_REQUEST['Size1'] . "','" . $_REQUEST['Totsqr1'] . "','" . $_REQUEST['Rate1'] . "','" . $_REQUEST['SubTotal1'] . "','" . $_REQUEST['paid1'] . "','" . $_REQUEST['pending1'] . "')";
 if(mysqli_query($con,$sql1)) {
echo "<script type='text/javascript'>alert('inserted successfully!');window.location='viniylreport.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
}
 

}

if (strlen( $_REQUEST['name2'])>0 && strlen( $_REQUEST['sno2'])>0 ){
$sql2  = "INSERT INTO viniyl(sno,date,Name,Contact,size,totalsqr,rate,subtotal,paid,pending) VALUES ('" . $_REQUEST['sno2']."','" . $_REQUEST['tdate']."','" . $_REQUEST['name2'] . "','" . $_REQUEST['Contact2'] . "','" . $_REQUEST['Size2'] . "','" . $_REQUEST['Totsqr2'] . "','" . $_REQUEST['Rate2'] . "','" . $_REQUEST['SubTotal2'] . "','" . $_REQUEST['paid2'] . "','" . $_REQUEST['pending2'] . "')";
 if(mysqli_query($con,$sql2)) {
echo "<script type='text/javascript'>alert('inserted successfully!');window.location='viniylreport.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
 

}

if (strlen( $_REQUEST['name3'])>0 && strlen( $_REQUEST['sno3'])>0 ){
$sql3  = "INSERT INTO viniyl(sno,date,Name,Contact,size,totalsqr,rate,subtotal,paid,pending) VALUES ('" . $_REQUEST['sno3']."','" . $_REQUEST['tdate']."','" . $_REQUEST['name3'] . "','" . $_REQUEST['Contact3'] . "','" . $_REQUEST['Size3'] . "','" . $_REQUEST['Totsqr3'] . "','" . $_REQUEST['Rate3'] . "','" . $_REQUEST['SubTotal3'] . "','" . $_REQUEST['paid3'] . "','" . $_REQUEST['pending3'] . "')";
 if(mysqli_query($con,$sql3)) {
echo "<script type='text/javascript'>alert('inserted successfully!');window.location='viniylreport.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql3 . "<br>" . mysqli_error($con);
}
 
}





}
  
    
?>