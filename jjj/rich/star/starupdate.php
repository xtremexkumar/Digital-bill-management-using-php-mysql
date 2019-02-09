
<?php
if(isset($_POST['update']))
{	
    print("update");
   $connect = mysqli_connect("localhost", "root", "", "rich");
     
   
  
$id=$_REQUEST['id'];
$q=mysqli_query($connect,"select * from star where id='$id'");
$res=mysqli_fetch_array($q);


extract($_POST);
if(isset($update))
{
   mysqli_query($connect,"update star set sno='$sno',Name='$Name',Contact='$Contact',Size='$Size',date='$date',Rate='$Rate',totalsqr='$totalsqr',subtotal='$subtotal',paid='$paid',pending='$pending',updateddate='" . $_REQUEST['tdate'] . "' WHERE id=$id");
		
	
	echo "Records updated";
	
	} 
echo "<script type='text/javascript'>alert('updated successfully!');window.location='starreport.php';</script>";

  }
         
 
?>      
 
 <?php
//getting id from url
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "rich");
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM star WHERE id=$id");

while($res = mysqli_fetch_array($result))
{

    $sno =$res['sno'];
    $Name =$res['Name'];
    $Contact=$res['Contact'];
    $size=$res['Size'];
    $date=$res['date'];
    $rate=$res['Rate'];
    $totalsqr=$res['totalsqr'];
    $subtotal=$res['subtotal'];
    $paid=$res['paid'];
    $pending=$res['pending'];
    }
?>  


<?php
include_once("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="../js/jquery-2.2.4.js"></script>
 

<script>
$(document).ready(function() {
	var today = new Date();
var dd = ("0" + (today.getDate())).slice(-2);
var mm = ("0" + (today.getMonth() +　1)).slice(-2);
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd ;
$("#tdate").attr("value", today);
});
</script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="starsales.php">StarFlex</a>
  <a href="starpending.php">Pending</a>
  <a href="starreport.php">Report</a>
  
</div>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

<script>

       function pendingcal(Rate,paid,pending)
       {
       		 

      pending.value=Rate-paid;
	  
	
       }
	
 function sub1(){


  if(document.getElementById('Rate')!=null && document.getElementById('Rate').value.length>0){
           document.getElementById('SubTotal').value=document.getElementById('Rate').value;
		 
}
else{
			 document.getElementById('SubTotal').value="";
		}
}  
</script>
<style>
 	body {
		
		fofft-family:  initial;
  
  fofft-size: 16px;
  background: url('') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  fofft-family: 'Roboto', Tahoma, Arial, sans-serif;
  line-height: 1.5;
 
}



form > .textbox {
  outline: 0;
  height: 42px;
  width: 244px;
  line-height: 42px;
  padding: 0 16px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .buttoff1 {
  outline: 0;
  background: noffe;
  background-color: rgba(38, 50, 56, 0.8);
  
  height: 30px;
  width: 50px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  fofft: normal normal normal 14px/1 FofftAwesome;
  fofft-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transitioff: background-color .4s ease;
  transitioff: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .buttoff1:hover {
  background-color: rgba(0, 150, 136, 0.8);
}
form > .buttoff {
  outline: 0;
  background: noffe;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  fofft: normal normal normal 14px/1 FofftAwesome;
  fofft-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transitioff: background-color .4s ease;
  transitioff: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .buttoff:hover {
  background-color: rgba(0, 150, 136, 0.8);
}

</style>

<h1  align="center"style="color:Green;">Rich Media star update  </h1>
<td >
<br/>
<br>

<form action="" method="post" >
<label for="dt">Date: </label> <input name="date"value="<?php echo $date;?>" type="date"/>
<br>
<br>

<table  align="center">



<tr>  <th size=10>Serial_no</th>
		
        <th>Name</th>
        <th>Cofftact</th>      
         <th>Size</th>
		 <th>Totsqr</th>
		 <th>Rate</th>
		 <th>SubTotal</th>
		 <th>paid</th>
		 <th>pending</th>
		 
</tr>
<tr>
<td>
	 
 <input type="text" name="sno" autocomplete=off value="<?php echo $sno;?>"size="7"id="sno" /> 
</td>

<td>		 
<input type="text" name="Name" autocomplete=off value="<?php echo $Name;?>" size="7"id="name" /> 
</td>

<td>		 
<input type="text" name="Contact" autocomplete=off value="<?php echo $Contact;?>" size="7"id="Contact" /> 
</td>
<td>		 
<input type="text" name="Size" autocomplete=off value="<?php echo $size;?>" size="15"id="Size" /> 
</td>
<td>		 
<input type="text" name="totalsqr" autocomplete=off value="<?php echo $totalsqr;?>" size="7"id="Totsqr" /> 
</td>
<td>		 
<input type="text" name="Rate" autocomplete=off value="<?php echo $rate;?>"  onchange="sub1(document.getElementById('Rate').value);" size="7"id="Rate" " /> 
</td>
<td>
<input type="text" autocomplete=off readonly size="7"name="subtotal" value="<?php echo $subtotal;?>"  id="SubTotal" />
</td>
<td>
<input type="text" autocomplete=off  size="7"name="paid"value="<?php echo $paid;?>" id="paid" onchange="pendingcal(document.getElementById('Rate').value,document.getElementById('paid').value,document.getElementById('pending'));"     />
</td>
<td>
<input type="text" autocomplete=off  readonly size="7"name="pending"  value="<?php echo $pending;?>" id="pending" />
</td>
<td>
 <input type ="date" id="tdate"size="7" name="tdate" value="" >
</td>
</tr>





</table>
<br>
<br>

<center>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
	<input type="submit" class="button1" value="Update"name ="update"/>

</form>



</body>
</html>
