
<?php
if(isset($_POST['update']))
{	
    print("update");
   $connect = mysqli_connect("localhost", "root", "", "rich");
     
   
  
$id=$_REQUEST['id'];
$q=mysqli_query($connect,"select * from expenses where id='$id'");
$res=mysqli_fetch_array($q);


extract($_POST);
if(isset($update))
{
 mysqli_query($connect,"update expenses set name='$name',date='$tdate',quantity='$quantity',rate='$rate' 
   WHERE id=$id");

	
	echo "Records updated";
	
	} 

  }
         
 
?>      
 
 <?php
//getting id from url
$id = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "rich");
//selecting data associated with this particular id
$result = mysqli_query($connect, "SELECT * FROM expenses WHERE id=$id");

while($res = mysqli_fetch_array($result))
{



   
    $name =$res['name'];
 
    $date=$res['date'];
    $quantity=$res['quantity'];
    $rate=$res['rate'];
   
   
  
		 
    
    }
?>  


<?php
include_once("connect.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>

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

<h1  align="center"style="color:Green;">Rich Media Expenses Entry </h1>
<td >
<br/>
<br>

<form action="" method="post" >


<table  align="center">



<tr>  
		<th >Date</th>
         <th>Name</th>
         <th>Quantity</th>      
         <th>Rate</th>
		 
		 
		
</tr>


<tr>

<table >

<tr>
<td>
 Date<input type ="date" id="tdate" name="tdate" value="" >


</td>
<td>
Name:<input type="text" name="name" value="<?php echo $name;?>" autocomplete=off size="7"id="name" />
</td>

<td>		 
Size & Quantity: <input type="text" name="quantity" value="<?php echo $quantity;?>" autocomplete=off size="20"id="Quantity" /> 
</td>

<td>		 
Rate: <input type="text" name="rate"   value="<?php echo $rate;?>" autocomplete=off size="20"id="rate" /> 
</td>

</tr>



</table>
</tr>





</table>


<center>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
	<input type="submit" class="button1" value="Update"name ="update"/>

</form>



</body>
</html>
