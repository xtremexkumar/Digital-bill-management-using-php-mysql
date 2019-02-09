

<script>
function goBack() {
    window.history.back();
}
</script>
<?php

include("connect.php");

	
$old=$_POST['old'];
$new=$_POST['new'];

$username=$_SESSION['rainbow_username'];

$query="select * from user where username='$username' and password='$old' ";
$query2="update user set password='$new' where username='$username'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$rows=mysqli_num_rows($result);
				
if($rows==0) {echo '<center><font size="4" color="blue">Wrong old password!!!</font></center><br>';}

else{$result2=mysqli_query($con,$query2);
echo '<center><font size="4" color="blue">Password Updated!!!</font></center><br>';
}
	
echo '<center><font size="4" color="blue"><button onclick="goBack()">Go Back</button></a></font></center><br>'
		?>