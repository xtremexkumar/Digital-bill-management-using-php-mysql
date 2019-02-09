
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
  <a class="active" href="starsales.php">StarFlex</a>
   <a href="starpending.php">Pending</a>
  <a href="starreport.php">Report</a>
  
</div>



</body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
 <script type="text/javascript" src="../js/jquery-2.2.4.js"></script>


<script>


function call_totall(){
		temp=0;


    for (i =1; i<=4;i++){

        if(document.getElementById('Rate'+i)!=null && document.getElementById('Rate'+i).value.length>0){
           document.getElementById('SubTotal'+i).value=document.getElementById('Rate'+i).value;
		   temp=parseFloat(temp)+parseFloat(document.getElementById('Rate'+i).value)
        }else{
			 document.getElementById('SubTotal'+i).value="";
		}
      }
      document.getElementById('totrate').value=temp;
	  }


	  function call_paid(){
		  temp2=0;
	   for (i =1; i<=4;i++){

        if(document.getElementById('paid'+i)!=null && document.getElementById('paid'+i).value.length>0){

            temp2=parseFloat(temp2)+parseFloat(document.getElementById('paid'+i).value)
        }
      }
      document.getElementById('totpaid').value=temp2;
	  }

  function call_pending(){
		  temp3=0;
	   for (i =1; i<=4;i++){

        if(document.getElementById('pending'+i)!=null && document.getElementById('pending'+i).value.length>0){
            temp3=parseFloat(temp3)+parseFloat(document.getElementById('pending'+i).value)
        }
      }
      document.getElementById('totpending').value=temp3;
	  }






       function pendingcal(Rate,paid,pending)
       {

	   
      pending.value=Rate-paid;

		call_pending();


       }













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

<h1  align="center"style="color:Green;">Rich Media StarFlex Entry </h1>
<td >
<br/>
<br>

<form action="starinsert.php" method="post" >


Date: <input type ="date" id="tdate" name="tdate" value="" >

<br>
<br>

<table  align="center">



<tr>  <th size=10>Serial_no</th>

        <th>Name</th>
        <th>Contact</th>
         <th>Size</th>
		 <th>Totsqr</th>
		 <th>Rate</th>
		 <th>SubTotal</th>
		 <th>paid</th>
		 <th>pending</th>

</tr>
<tr>
<td>

 <input type="text" name="sno" autocomplete=off size="10"id="sno1" />
</td>

<td>
<input type="text" name="name" autocomplete=off size="10"id="name1" />
</td>

<td>
<input type="text" name="Contact" autocomplete=off size="10"id="Contact1" />
</td>
<td>
<input type="text" name="Size" autocomplete=off size="15"id="Size1" />
</td>
<td>
<input type="text" name="Totsqr" autocomplete=off size="10"id="Totsqr1" />
</td>
<td>
<input type="text" name="Rate" autocomplete=off size="10"id="Rate1" onchange="call_totall(document.getElementById('Rate1').value);" />
</td>
<td>
<input type="SubTotal" autocomplete=off  size="10" readonly  name="SubTotal" id="SubTotal1"  />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="paid" id="paid1" onchange="call_paid(document.getElementById('paid1').value); pendingcal(document.getElementById('Rate1').value,document.getElementById('paid1').value,document.getElementById('pending1'));" />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="pending"   id="pending1" onchange="call_pending(document.getElementById('pending1').value);" />
</td>
</tr>




<tr>

</tr>
<tr>
<td>

<input type="text" name="sno1" autocomplete=off size="10"id="sno2" />
</td>

<td>
<input type="text" name="name1" autocomplete=off size="10"id="name2" />
</td>

<td>
<input type="text" name="Contact1" autocomplete=off size="10"id="Contact2" />
</td>
<td>
<input type="text" name="Size1" autocomplete=off size="15"id="Size2" />
</td>
<td>
<input type="text" name="Totsqr1" autocomplete=off size="10"id="Totsqr2" />
</td>
<td>
<input type="text" name="Rate1" autocomplete=off size="10"id="Rate2" onchange="call_totall(document.getElementById('Rate2').value);" />
</td>
<td>
<input type="text" autocomplete=off  readonly size="10"name="SubTotal1" id="SubTotal2" />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="paid1" id="paid2" onchange="call_paid(document.getElementById('paid2').value); pendingcal(document.getElementById('Rate2').value,document.getElementById('paid2').value,document.getElementById('pending2'));" />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="pending1" id="pending2" onchange="call_pending(document.getElementById('pending2').value);" />
</td>
</tr>
<tr>

</tr>
<tr>
<td>

<input type="text" name="sno2" autocomplete=on size="10"id="sno3" />
</td>

<td>
<input type="text" name="name2" autocomplete=on size="10"id="name3" />
</td>

<td>
<input type="text" name="Contact2" autocomplete=on size="10"id="Contact3" />
</td>
<td>
<input type="text" name="Size2" autocomplete=off size="15"id="Size3" />
</td>
<td>
<input type="text" name="Totsqr2" autocomplete=off size="10"id="Totsqr3" />
</td>
<td>
<input type="text" name="Rate2" autocomplete=off size="10"id="Rate3" onchange="call_totall(document.getElementById('Rate3').value);" />
</td>
<td>
 <input type="text" autocomplete=off  readonly size="10"name="SubTotal2" id="SubTotal3" />
</td>
<td>
<input type= "text" autocomplete=off  size="10"name="paid2" id="paid3" onchange="call_paid(document.getElementById('paid3').value); pendingcal(document.getElementById('Rate3').value,document.getElementById('paid3').value,document.getElementById('pending3'));" />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="pending2" id="pending3" onchange="call_pending(document.getElementById('pending3').value);" />
</td>
</tr>
<tr>

</tr>
<tr>
<td>

 <input type="text" name="sno3" autocomplete=off size="10"id="sno4" />
</td>

<td>
<input type="text" name="name3" autocomplete=off size="10"id="name4" />
</td>

<td>
<input type="text" name="Contact3" autocomplete=off size="10"id="Contact4" />
</td>
<td>
<input type="text" name="Size3" autocomplete=off size="15"id="Size4" />
</td>
<td>
<input type="text" name="Totsqr3" autocomplete=off size="10"id="Totsqr4" />
</td>
<td>
<input type="text" name="Rate3" autocomplete=off size="10"id="Rate4" onchange="call_totall(document.getElementById('Rate4').value);" />
</td>
<td>
<input type="text" autocomplete=off readonly size="10"name="SubTotal3" id="SubTotal4" />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="paid3" id="paid4" onchange="call_paid(document.getElementById('paid4').value); pendingcal(document.getElementById('Rate4').value,document.getElementById('paid4').value,document.getElementById('pending4'));" />
</td>
<td>
<input type="text" autocomplete=off  size="10"name="pending3" id="pending4"     />
</td>
</tr>

</table>
<br>
<br>

<center>
<table >
<tr>
<td>
TotalRate<input type="text" autocomplete=off  size="10"name="totrate" id="totrate" />
</td>
<td>
TotalPaid<input type="text" autocomplete=off  size="10"name="totpaid" id="totpaid" />
</td>

<td>
TotalPending<input type="text" autocomplete=off  size="10"name="totpending" id="totpending" />
</td>
</tr>
<tr>
</tr>
<tr>
<td>
</td>

<td align=center>

<input type="submit" class="button"name="submit"value="save" ></button>
</td>
<td>
</td>
</tr>
</table>
</form>



</body>
</html>
