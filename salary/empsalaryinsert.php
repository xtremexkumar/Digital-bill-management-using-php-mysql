
<?php 
 include("connect.php");
 //alert("connect");
 print("hai");
 
if(isset($_POST["submit"]))
{
    if (strlen( $_REQUEST['name'])>0 && strlen( $_REQUEST['contact'])>0 ){
$sql  = "INSERT INTO salary(date,name,contact,salary,advance,leaves,netsalary,updateddate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name']."','" . $_REQUEST['contact'] . "','" . $_REQUEST['salary'] . "','" . $_REQUEST['advance'] . "','" . $_REQUEST['leaves'] . "','" . $_REQUEST['netsalary'] . "','" . $_REQUEST['tdate'] . "')";

 if(mysqli_query($con,$sql)) {
	 echo "<script type='text/javascript'>alert('inserted successfully!');window.location='empreport1.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
 

	}

    if (strlen( $_REQUEST['name1'])>0 && strlen( $_REQUEST['contact1'])>0 ){
$sql1  = "INSERT INTO salary(date,name,contact,salary,advance,leaves,netsalary,updateddate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name1']."','" . $_REQUEST['contact1'] . "','" . $_REQUEST['salary1'] . "','" . $_REQUEST['advance1'] . "','" . $_REQUEST['leaves1'] . "','" . $_REQUEST['netsalary1'] . "','" . $_REQUEST['tdate'] . "')";

 if(mysqli_query($con,$sql1)) {
 echo "<script type='text/javascript'>alert('inserted successfully!');window.location='empreport1.php';</script>";


} 
else {
		echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
}
 
           

	}

    if (strlen( $_REQUEST['name2'])>0 && strlen( $_REQUEST['contact2'])>0 ){
$sql2  = "INSERT INTO salary(date,name,contact,salary,advance,leaves,netsalary,updateddate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name2']."','" . $_REQUEST['contact2'] . "','" . $_REQUEST['salary2'] . "','" . $_REQUEST['advance2'] . "','" . $_REQUEST['leaves2'] . "','" . $_REQUEST['netsalary2'] . "','" . $_REQUEST['tdate'] . "')";

 if(mysqli_query($con,$sql2)) {
 echo "<script type='text/javascript'>alert('inserted successfully!');window.location='empreport1.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
}
 
           

	}


    if (strlen( $_REQUEST['name3'])>0 && strlen( $_REQUEST['contact3'])>0 ){
$sql3  = "INSERT INTO salary(date,name,contact,salary,advance,leaves,netsalary,updateddate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name3']."','" . $_REQUEST['contact3'] . "','" . $_REQUEST['salary3'] . "','" . $_REQUEST['advance3'] . "','" . $_REQUEST['leaves3'] . "','" . $_REQUEST['netsalary3'] . "','" . $_REQUEST['tdate'] . "')";

 if(mysqli_query($con,$sql3)) {
 echo "<script type='text/javascript'>alert('inserted successfully!');window.location='empreport1.php';</script>";

} 
else {
		echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql3 . "<br>" . mysqli_error($con);
}
 

	}


    if (strlen( $_REQUEST['name4'])>0 && strlen( $_REQUEST['contact4'])>0 ){
$sql4  = "INSERT INTO salary(date,name,contact,salary,advance,leaves,netsalary,updateddate) VALUES ('" . $_REQUEST['tdate']."','" . $_REQUEST['name4']."','" . $_REQUEST['contact4'] . "','" . $_REQUEST['salary4'] . "','" . $_REQUEST['advance4'] . "','" . $_REQUEST['leaves4'] . "','" . $_REQUEST['netsalary4'] . "','" . $_REQUEST['tdate'] . "')";

 if(mysqli_query($con,$sql)) {
 echo "<script type='text/javascript'>alert('inserted successfully!');window.location='empreport1.php';</script>";

} 
else {
	echo "<script type='text/javascript'>alert('failed!')</script>";
echo "Error: " . $sql4 . "<br>" . mysqli_error($con);
}
 
           

	}





}
    
    
?>