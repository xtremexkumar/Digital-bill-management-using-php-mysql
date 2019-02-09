
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
  <a class="active" href="Expenses.php">Expenses</a>

  <a href="expensesreport.php">Report</a>
  
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



.textbox {
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

 .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

 .button {
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
  font-size: 20px;

  
}

form > .button:hover {
  background-color: rgba(0, 150, 136, 0.8);
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}


#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 10px;
}


#customers tr:nth-child(even){background-color: #f2f2f2;

height: 10px;
 style="height:150%";
}



#customers tr:hover {background-color: #ddd;

}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:  #4CAF50;
    color:white;
}
</style>

<h1  align="center"style="color:Green;">Rich Media Expenses Entry </h1>
<td >
<br/>
<br>

<form action="expensesinsert.php" method="post" >


  &emsp;   &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;Date:<input type ="date" id="tdate" name="tdate" value="" >

<br>
<br>
<center>
<table  width='80%' border=1  id="customers">

<tr> 
		
        
        <th>Name</th>      
         <th>Size & Quantity: </th>
		 <th>Rate</th>
		 
		 
</tr>


<tr>

<td>
<input type="text" name="name" autocomplete=off size="20"id="name" required />
</td>

<td>		 
<input type="text" name="quantity" autocomplete=off size="20"id="quantity" /> 
</td>

<td>		 
 <input type="text" name="rate" autocomplete=off size="20"id="rate"  required /> 
</td>

</tr>


<tr>

<td>
<input type="text" name="name1" autocomplete=off size="20"id="name1" />
</td>

<td>		 
 <input type="text" name="quantity1" autocomplete=off size="20"id="quantity1" /> 
</td>

<td>		 
 <input type="text" name="rate1" autocomplete=off size="20"id="rate1" /> 
</td>

</tr>


<tr>

<td>
<input type="text" name="name2" autocomplete=off size="20"id="name2" />
</td>

<td>		 
 <input type="text" name="quantity2" autocomplete=off size="20"id="quantity2" /> 
</td>

<td>		 
 <input type="text" name="rate2" autocomplete=off size="20"id="rate2" /> 
</td>

</tr>




</table>
<br>
<br>
   
<center>
<input type="submit"    id="button-search" class="button"name="submit" size="15"value="save" ></button>
</form>



</body>
</html>
