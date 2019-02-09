


<?php
include_once("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <a class="active" href="salary.php">Salary</a>
  <a href="empreport1.php">report</a>
 
  
</div>


</body>
</html>




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
		
		font-family:  initial;
  
  font-size: 16px;
  background: url('') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Roboto', Tahoma, Arial, sans-serif;
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

form > .button1 {
  outline: 0;
  background: none;
  background-color: rgba(38, 50, 56, 0.8);
  
  height: 30px;
  width: 50px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button1:hover {
  background-color: rgba(0, 150, 136, 0.8);
}
form > .button {
  outline: 0;
  background: none;
  background-color: rgba(38, 50, 56, 0.8);
  float: left;
  height: 42px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color: #FFF;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button:hover {
  background-color: rgba(0, 150, 136, 0.8);
}

</style>

<h1  align="center"style="color:Green;">Rich Media Salary Entry </h1>
<td >
<br/>
<br>

<form action="empsalaryinsert.php" method="post" >


&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date: <input type ="date" id="tdate" name="tdate" value="" >

<br>
<br>

<table  align="center">



<tr>  
		
        <th>Name</th>
		 <th>Contact</th>  
        <th>Salery</th>      
         <th>Advance</th>
		 <th>Leaves</th>
		 <th>netsalary</th>
		 
		 
		
		 
	
		 
</tr>



<tr>
<td>
	 
 <input type="text" name="name" autocomplete=off size="7"id="name" required /> 
</td>
<td>		 
<input type="text" name="contact" autocomplete=off size="7"id="contact" required /> 
</td>
<td>		 
<input type="text" name="salary" autocomplete=off size="7"id="sal" /> 
</td>

<td>		 
<input type="text" name="advance" autocomplete=off size="7"id="advance" /> 
</td>
<td>		 
<input type="text" name="leaves" autocomplete=off size="7"id="leaves" /> 
</td>
<td>		 
<input type="text" name="netsalary" autocomplete=off size="7"id="netsalary" /> 
</td>
</tr>

<tr>
</tr>
<tr>
<td>
	 <input type="text" name="name1" autocomplete=off size="7"id="name1" /> 
</td>
<td>		 
<input type="text" name="contact1" autocomplete=off size="7"id="contact1" /> 
</td>
<td>		 
<input type="text" name="salary1" autocomplete=off size="7"id="salery1" /> 
</td>

<td>		 
<input type="text" name="advance1" autocomplete=off size="7"id="advance1" /> 
</td>
<td>		 
<input type="text" name="leaves1" autocomplete=off size="7"id="leaves1" /> 
</td>
<td>		 
<input type="text" name="netsalary1" autocomplete=off size="7"id="netsalary1" /> 
</td>
</tr>
<tr>
<td>
	 <input type="text" name="name2" autocomplete=off size="7"id="name2" /> 
</td>
<td>		 
<input type="text" name="contact2" autocomplete=off size="7"id="contact1" /> 
</td>
<td>		 
<input type="text" name="salary2" autocomplete=off size="7"id="salery2" /> 
</td>

<td>		 
<input type="text" name="advance2" autocomplete=off size="7"id="advance2" /> 
</td>
<td>		 
<input type="text" name="leaves2" autocomplete=off size="7"id="leaves2" /> 
</td>
<td>		 
<input type="text" name="netsalary2" autocomplete=off size="7"id="netsalary2" /> 
</td>
</tr>


<tr>
<td>
	 <input type="text" name="name3" autocomplete=off size="7"id="name3" /> 
</td>
<td>		 
<input type="text" name="contact3" autocomplete=off size="7"id="contact1" /> 
</td>
<td>		 
<input type="text" name="salary3" autocomplete=off size="7"id="salery3" /> 
</td>

<td>		 
<input type="text" name="advance3" autocomplete=off size="7"id="advance3" /> 
</td>
<td>		 
<input type="text" name="leaves3" autocomplete=off size="7"id="leaves3" /> 
</td>
<td>		 
<input type="text" name="netsalary3" autocomplete=off size="7"id="netsalary3" /> 
</td>
</tr>

<tr>
<td>
	 <input type="text" name="name4" autocomplete=off size="7"id="name4" /> 
</td>
<td>		 
<input type="text" name="contact4" autocomplete=off size="7"id="contact4" /> 
</td>
<td>		 
<input type="text" name="salary4" autocomplete=off size="7"id="salery4" /> 
</td>

<td>		 
<input type="text" name="advance4" autocomplete=off size="7"id="advance4" /> 
</td>
<td>		 
<input type="text" name="leaves4" autocomplete=off size="7"id="leaves4" /> 
</td>
<td>		 
<input type="text" name="netsalary4" autocomplete=off size="7"id="netsalary4" /> 
</td>
</tr>


</table>
<br>
<br>

<center>
<input type="submit" class="button"name="submit"value="save" ></button>
</form>



</body>
</html>
