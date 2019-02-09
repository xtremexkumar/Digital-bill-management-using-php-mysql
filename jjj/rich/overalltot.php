
<?php

$expense_rate="";
$sales_rate="";
$sales_paid="";
$sales_pending="";
$salary_adv="";
$salary_tot="";
$salary_netSal="";
  $viniyl_rate="";
  $viniyl_paid ="";
  $viniyl_pending ="";
  $poster_rate ="";
  $poster_paid="";
  $poster_pending ="";
  $viniyl_rate="";
  $viniyl_paid ="";
  $viniyl_pending ="";
  $fitting_rate ="";
  $fitting_paid ="";
  $fitting_pending ="";
  
  $star_rate ="";
  $star_paid ="";
  $star_pending ="";
  
  $visitingcard_rate="";
  $visitingcard_paid ="";
  $lightboard_rate ="";
  $lightboard_paid ="";
  $lightboard_pending ="";
  
  $gift_rate ="";
  $gift_paid ="";
  $gift_pending =""; 

  $foam_rate ="";
  $foam_paid ="";
  $foam_pending ="";

if(isset($_POST['search']))
{

		$from_date= $_POST['from_date'];
	$to_date= $_POST['to_date'];
    
    //$query = "SELECT sum(a.rate) as expense_rate,sum(a.quantity)as expense_qty ,sum(b.where 1=1) as sales_rate,sum(b.paid)as sales_paid ,sum(b.pending) as sales_pending,
	//sum(c.salary) as emp_salary,sum (c.advance)as emp_advance,sum (c.netsalary)as empnetsalary 
	//FROM expenses a ,dailyinsert b ,salary c where 1=1 ";
	
	$query1 = "SELECT sum(rate) as expense_rate FROM expenses where 1=1";
	$query2 = "SELECT sum(Rate)as sales_rate,sum(paid) as sales_paid,sum(pending) as sales_pending FROM dailyinsert where 1=1";
	
	$query3 = "SELECT sum(salary) as emp_salary,sum(advance) as emp_advance,sum(netsalary)as emp_netsalary   FROM salary where 1=1";
	
	$query4 = "SELECT sum(Rate)as poster_rate,sum(paid) as poster_paid,sum(pending) as poster_pending FROM poster where 1=1";
	
	$query5 = "SELECT sum(Rate)as viniyl_rate,sum(paid) as viniyl_paid,sum(pending) as viniyl_pending FROM viniyl where 1=1";
	
	$query6 = "SELECT sum(Rate)as lightboard_rate,sum(paid) as lightboard_paid,sum(pending) as lightboard_pending FROM lightboard where 1=1";
	
	$query7 = "SELECT sum(Rate)as fitting_rate,sum(paid) as fitting_paid,sum(pending) as fitting_pending FROM fitting where 1=1";

	
	$query8 = "SELECT sum(Rate)as star_rate,sum(paid) as star_paid,sum(pending) as star_pending FROM star where 1=1";
	
	
	$query9= "SELECT sum(Rate)as visitingcard_rate,sum(paid) as visitingcard_paid FROM visitingcard where 1=1";

	$query10="SELECT sum(Rate)as foam_rate,sum(paid) as foam_paid,sum(pending) as foam_pending FROM foam where 1=1";
	
	$query11="SELECT sum(Rate)as gift_rate,sum(paid) as gift_paid,sum(pending) as gift_pending FROM gift where 1=1";
	
	if($from_date!=null && $from_date!=''){
		$query1=$query1.' and date >="'.$from_date.'"';
		$query2=$query2.' and date >="'.$from_date.'"';
		$query3=$query3.' and date >="'.$from_date.'"';
		$query4=$query4.' and date >="'.$from_date.'"';
		$query5=$query5.' and date >="'.$from_date.'"';
		$query6=$query6.' and date >="'.$from_date.'"';
		$query7=$query7.' and date >="'.$from_date.'"';
		$query8=$query8.' and date >="'.$from_date.'"';
		
		$query9=$query9.' and date >="'.$from_date.'"';
		$query10=$query10.' and date >="'.$from_date.'"';
		$query11=$query11.' and date >="'.$from_date.'"';
}
	
	if($to_date!=null && $to_date!=''){
	$query1=$query1.' and date <="'.$to_date.'"';
	$query2=$query2.' and date <="'.$to_date.'"';
	$query3=$query3.' and date <="'.$to_date.'"';
	$query4=$query4.' and date <="'.$to_date.'"';
		$query5=$query5.' and date <="'.$to_date.'"';
		$query6=$query6.' and date <="'.$to_date.'"';
		$query7=$query7.' and date <="'.$to_date.'"';
		
		
		$query8=$query8.' and date <="'.$to_date.'"';
		
		
		$query9=$query9.' and date <="'.$to_date.'"';
		$query10=$query10.' and date <="'.$to_date.'"';
		$query11=$query11.' and date <="'.$to_date.'"';
	}
$connect = mysqli_connect("localhost", "root", "", "rich");

$result1 = mysqli_query($connect,$query1);
$result2 = mysqli_query($connect,$query2);
$result3 = mysqli_query($connect,$query3);
$result4 = mysqli_query($connect,$query4);
$result5 = mysqli_query($connect,$query5);
$result6 = mysqli_query($connect,$query6);
$result7 = mysqli_query($connect,$query7);

$result8 = mysqli_query($connect,$query8);

$result9 = mysqli_query($connect,$query9);
$result10 = mysqli_query($connect,$query10);
$result11 = mysqli_query($connect,$query11);

$count1=0;
while($res = mysqli_fetch_array($result1))
{ 
  $expense_rate =$res['expense_rate'];
    
 }
 
 while($res = mysqli_fetch_array($result2))
{ 
  $sales_rate =$res['sales_rate'];
  $sales_paid =$res['sales_paid'];
  $sales_pending =$res['sales_pending'];
}
 
  while($res = mysqli_fetch_array($result3))
{ 
  $salary_tot =$res['emp_salary'];
  $salary_adv =$res['emp_advance'];
  $salary_netSal =$res['emp_netsalary'];
   
 }


 while($res = mysqli_fetch_array($result4))
{ 
  $poster_rate =$res['poster_rate'];
  $poster_paid=$res['poster_paid'];
  $poster_pending =$res['poster_pending'];
}


while($res = mysqli_fetch_array($result5))

{ 
  $viniyl_rate=$res['viniyl_rate'];
  $viniyl_paid =$res['viniyl_paid'];
  $viniyl_pending =$res['viniyl_pending'];
}
while($res = mysqli_fetch_array($result6))
{ 
	
  $lightboard_rate =$res['lightboard_rate'];
  $lightboard_paid =$res['lightboard_paid'];
  $lightboard_pending =$res['lightboard_pending'];
}
while($res = mysqli_fetch_array($result7))
{ 
	
  $fitting_rate =$res['fitting_rate'];
  $fitting_paid =$res['fitting_paid'];
  $fitting_pending =$res['fitting_pending'];
}
while($res = mysqli_fetch_array($result8))
{ 

  $star_rate =$res['star_rate'];

  $star_paid =$res['star_paid'];
  $star_pending =$res['star_pending'];
}
while($res = mysqli_fetch_array($result9))
	
{ 

  $visitingcard_rate=$res['visitingcard_rate'];

  $visitingcard_paid =$res['visitingcard_paid'];
  
}
while($res = mysqli_fetch_array($result10))
	
{ 
  $foam_rate=$res['foam_rate'];
  $foam_paid =$res['foam_paid'];
  $foam_pending =$res['foam_pending'];
  
}
while($res = mysqli_fetch_array($result11))
	
{ 

  $gift_rate=$res['gift_rate'];
  $gift_paid =$res['gift_paid'];
  $gift_pending =$res['gift_pending'];
}


 
	if($count1== 1){
  echo '<script>alert("Record Not Found!");</script>';
	
}
}
?>  
	

<html>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Over ALL TOTAL </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<head>
<script>

 function rate(){
	 temp=0;
	  document.getElementById('allrate').value='';
	  
	 var r1=0,r2=0,r3=0 ,r4=0,r5=0,r6=0,r7=0,r8=0,r9=0,rtotal=0;
	 
	  var p1=0,p2=0,p3=0 ,p4=0,p5=0,p6=0,p7=0,p8=0,p9=0,ptotal=0;
	 
	 var pe1=0,pe2=0,pe3=0 ,pe4=0,pe5=0,pe6=0,pe7=0,p8=0,petotal=0;

	 r1= document.getElementById('sal_rate').value.length>0?document.getElementById('sal_rate').value:0;
   r2=document.getElementById('star_rate').value.length>0?document.getElementById('star_rate').value:0;
   r3= document.getElementById('viniyl_rate').value.length>0?document.getElementById('viniyl_rate').value:0;
   r4= document.getElementById('visitingcard_rate').value.length>0?document.getElementById('visitingcard_rate').value:0;
   r5=document.getElementById('fitting_rate').value.length>0?document.getElementById('fitting_rate').value:0;
   r6=document.getElementById('lightboard_rate').value.length>0?document.getElementById('lightboard_rate').value:0;
   r7= document.getElementById('poster_rate').value.length>0?document.getElementById('poster_rate').value:0;
  r8=document.getElementById('foam_rate').value.length>0?document.getElementById('foam_rate').value:0;
   r9= document.getElementById('gift_rate').value.length>0?document.getElementById('gift_rate').value:0;
 
 rtotal=parseFloat(r1)+parseFloat(r2)+parseFloat(r3)+parseFloat(r4)+parseFloat(r5)+parseFloat(r6)+parseFloat(r7)+parseFloat(r8)+parseFloat(r9);
 
	 document.getElementById('allrate').value= rtotal;
	  document.getElementById('totrate').value= rtotal;
 
 
	 
 
	 



  p1= document.getElementById('sal_paid').value.length>0?document.getElementById('sal_paid').value:0;
  p2= document.getElementById('star_paid').value.length>0?document.getElementById('star_paid').value:0;
  p3= document.getElementById('viniyl_paid').value.length>0?document.getElementById('viniyl_paid').value:0;
  p4= document.getElementById('visitingcard_paid').value.length>0?document.getElementById('visitingcard_paid').value:0;
  p5= document.getElementById('fitting_paid').value.length>0?document.getElementById('fitting_paid').value:0;
  p6= document.getElementById('lightboard_paid').value.length>0?document.getElementById('lightboard_paid').value:0;
  p7= document.getElementById('poster_paid').value.length>0?document.getElementById('poster_paid').value:0;
 p8= document.getElementById('foam_paid').value.length>0?document.getElementById('foam_paid').value:0;
  p9= document.getElementById('gift_paid').value.length>0?document.getElementById('gift_paid').value:0;
		
 ptotal=parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)+parseFloat(p6)+parseFloat(p7)+parseFloat(p8)+parseFloat(p9);
 document.getElementById('allpaid').value= ptotal;
 
 
 
pe1=document.getElementById('sal_pending').value.length>0?document.getElementById('sal_pending').value:0;
pe2=document.getElementById('star_pending').value.length>0?document.getElementById('star_pending').value:0;
pe3=document.getElementById('viniyl_pending').value.length>0?document.getElementById('viniyl_pending').value:0;
pe4=document.getElementById('fitting_pending').value.length>0?document.getElementById('fitting_pending').value:0;
pe5=document.getElementById('lightboard_pending').value.length>0?document.getElementById('lightboard_pending').value:0;
pe6=document.getElementById('poster_pending').value.length>0?document.getElementById('poster_pending').value:0;
pe7=document.getElementById('foam_pending').value.length>0?document.getElementById('foam_pending').value:0;
pe8=document.getElementById('gift_pending').value.length>0?document.getElementById('gift_pending').value:0;
		
    petotal=parseFloat(pe1)+parseFloat(pe2)+parseFloat(pe3)+parseFloat(pe4)+parseFloat(pe5)+parseFloat(pe6)+parseFloat(pe7)+parseFloat(pe8);
 document.getElementById('allpending').value= petotal;
 
    


var a=0,allintot=0, a1=0 ,a2=0;
	a=document.getElementById('expense').value.length>0?document.getElementById('expense').value:0;
	a1=document.getElementById('salary_total').value.length>0?document.getElementById('salary_total').value:0;
	
	a2=parseFloat(a)+parseFloat(a1);
 allintot=rtotal-parseFloat(a2);
  document.getElementById('allexpense').value= a2;
  document.getElementById('allin').value= allintot;
 
	}
	
 

</script>

<style>
.label {
    color: white;
    padding: 8px;
    font-family: Arial;
}
.nf {background-color: #4CAF50;} /* Green */
.info {background-color: #4CAF50;} /* Blue */
.warning {background-color: #4CAF50;} /* Orange */
.danger {background-color: #4CAF50;} /* Red */ 
.other {background-color: #4CAF50; }
</style>
</head>
<body onload="rate()";>



<form action="" method="post">





 
              
                <center>
			 	   <label for="dt">From Date: </label> <input name="from_date"       value="<?php echo  $from_date;?>" type="date" required />  &emsp;
                    <label for="dt">TO Date: </label> <input name="to_date"  value="<?php echo  $to_date;?>"type="date"/>  &emsp;
					 
<input   class="button" type="submit"  value="Go" name="search"> &emsp;
   <br>
   <br>
   <table align=center  >
   <th> Title</th>
   <th> Rate Amount</th>
   <th> Title</th>
   <th> Paid Amount</th>
   <th> Title</th>
   <th> Pending Amount</th>
  
  
   <tr>
   <td> <span class="label nf">TOTAL NORMAL FLEX SALES:</span></td> 
   <td> <input type="text" name="sal_rate" id="sal_rate"  class="form-control" onchange="rate()"   value="<?php echo is_null($sales_rate)>0? "": $sales_rate;?>" size="15"    readonly /></td>
   <td> <span class="label nf"> TOTAL NORMAL FLEX PAID: </span> </td>
   <td><input type="text" name="sal_paid" id="sal_paid" class="form-control"  value="<?php echo is_null($sales_paid)>0? "": $sales_paid;?>" size="15"   readonly /></td>
   <td> <span class="label nf"> TOTAL NORMAL FLEX PENDING: </span></td>
   <td><input type="text" name="sal_pending" id="sal_pending" class="form-control"  value="<?php echo is_null($sales_pending)>0? "": $sales_pending;?>" size="15" readonly   /></td>
   </tr>
   <tr height=15px>
   </tr>
   

	
	
	
   <tr>
   <td><span class="label info"> TOTAL STAR FLEX SALES: </span></td>
   <td><input type="text" name="star_rate" id="star_rate"  class="form-control"  value="<?php echo is_null($star_rate)>0? "": $star_rate;?>" size="15"  readonly /></td>
   <td><span class="label info"> TOTAL STAR FLEX AMOUNT PAID: </span></td>
   <td><input type="text" name="star_paid" id="star_paid" class="form-control"  value="<?php echo is_null($star_paid)>0? "": $star_paid;?>" size="15" readonly  /></td>
   <td><span class="label info"> TOTAL STAR FLEX AMOUNT PENDING: </span></td>
   <td><input type="text" name="star_pending" id="star_pending" class="form-control"  value="<?php echo is_null($star_pending)>0? "": $star_pending;?>" size="15"  readonly   /></td>
   </tr>
   
    <tr height=15px>
   </tr>

   
   
   <tr>
   <td><span class="label warning"> TOTAL VINIYL FLEX SALES:</span></td>
   <td><input type="text" name="viniyl_rate" id="viniyl_rate" class="form-control"  value="<?php echo is_null($viniyl_rate)>0? "": $viniyl_rate;?>" readonly size="15"/></td>
   <td> <span class="label warning"> TOTAL VINIYL FLEX AMOUNT PAID:</span></td>
   <td><input type="text" name="viniyl_paid" id="viniyl_paid" class="form-control"  value="<?php echo is_null($viniyl_paid)>0? "": $viniyl_paid;?>"  readonly size="15"/></td>
   <td><span class="label warning"> TOTAL VINIYL FLEX AMOUNT PENDING:</span></td>
   <td><input type="text" name="viniyl_pending" id="viniyl_pending" class="form-control"  value="<?php echo is_null($viniyl_pending)>0? "": $viniyl_pending;?>" readonly size="15"/></td>
   </tr>

  <tr height=15px>
   </tr>
   	
   <tr>
   <td><span class="label nf"> Total Visiting Card Sales:</span></td>
   <td><input type="text" name="visitingcard_rate" id="visitingcard_rate" class="form-control"   value="<?php echo is_null($visitingcard_rate)>0? "": $visitingcard_rate;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Visiting Card amount paid :</span></td>
   <td><input type="text" name="visitingcard_paid" id="visitingcard_paid" class="form-control"  value="<?php echo is_null($visitingcard_paid)>0? "": $visitingcard_paid;?>" readonly size="15"/></td>
   <td>
</td> 
  <td>
</td>     
   </tr>
   
    <tr height=15px>
   </tr>
<tr>
</tr>

   <tr>
   <td><span class="label danger"> Total Fitting Charge :</span></td>
   <td><input type="text" name="fitting_rate" id="fitting_rate" class="form-control"  value="<?php echo is_null($fitting_rate)>0? "": $fitting_rate;?>" readonly size="15"/></td>
   <td><span class="label danger"> Total Fitting Amount Paid:</span></td>
   <td><input type="text" name="fitting_paid" id="fitting_paid" class="form-control"  value="<?php echo is_null($fitting_paid)>0? "": $fitting_paid;?>" readonly size="15"/></td>
   <td><span class="label danger"> Total  Fitting  Amount Pending:</span></td>
   <td><input type="text" name="fitting_pending" id="fitting_pending" class="form-control"   value="<?php echo is_null($fitting_pending)>0? "": $fitting_pending;?>" readonly size="15"/></td>
   </tr>
    <tr height=15px>
   </tr>
   <tr>
   <td><span class="label nf"> Total Lightboard Charge:</span></td>
   <td><input type="text" name="lightboard_rate" id="lightboard_rate" class="form-control"   value="<?php echo is_null($lightboard_rate)>0? "": $lightboard_rate;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Lightboard Amount Paid:</span></td>
   <td><input type="text" name="lightboard_paid" id="lightboard_paid" class="form-control"   value="<?php echo is_null($lightboard_paid)>0? "": $lightboard_paid;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Lightboard Amount Pending:</span></td>
   <td><input type="text" name="lightboard_pending" id="lightboard_pending" class="form-control"  value="<?php echo is_null($lightboard_pending)>0? "": $lightboard_pending;?>" readonly size="15"/></td>
   </tr>
   
    <tr height=15px>
   </tr>
      <tr>
   <td><span class="label nf"> Total Foam_Sheet Charge:</span></td>
   <td><input type="text" name="foam_rate" id="foam_rate" class="form-control"   value="<?php echo is_null($foam_rate)>0? "": $foam_rate;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Foam_Sheet Amount Paid:</span></td>
   <td><input type="text" name="foam_paid" id="foam_paid" class="form-control"   value="<?php echo is_null($foam_paid)>0? "": $foam_paid;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Foam_Sheet Amount Pending:</span></td>
   <td><input type="text" name="foam_pending" id="foam_pending" class="form-control"  value="<?php echo is_null($foam_pending)>0? "": $foam_pending;?>" readonly size="15"/></td>
   </tr>
   
    <tr height=15px>
   </tr>
      <tr>
   <td><span class="label nf"> Total Gift Charge:</span></td>
   <td><input type="text" name="gift_rate" id="gift_rate" class="form-control"   value="<?php echo is_null($gift_rate)>0? "": $gift_rate;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Gift Amount Paid:</span></td>
   <td><input type="text" name="gift_paid" id="gift_paid" class="form-control"   value="<?php echo is_null($gift_paid)>0? "": $gift_paid;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Gift Amount Pending:</span></td>
   <td><input type="text" name="gift_pending" id="gift_pending" class="form-control"  value="<?php echo is_null($gift_pending)>0? "": $gift_pending;?>" readonly size="15"/></td>
   </tr>
   
    <tr height=15px>
   </tr>
   <tr>
   <td><span class="label nf"> Total Poster Sales:</span></td>
   <td><input type="text" name="poster_rate" id="poster_rate" class="form-control"  value="<?php echo is_null($poster_rate)>0? "": $poster_rate;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Poster Amount paid:</span></td>
   <td><input type="text" name="poster_paid" id="poster_paid" class="form-control"  value="<?php echo is_null($poster_paid)>0? "": $poster_paid;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Poster Amount Pending:</span></td>
   <td><input type="text" name="poster_pending" id="poster_pending" class="form-control"  value="<?php echo is_null($poster_pending)>0? "": $poster_pending;?>" readonly size="15"/></td>
   </tr>
 <tr height=15px>
   </tr>
   <tr>
 
     <td><span class="label nf"> Total  rate:</span></td>
 
    <td><input type="text" name="allrate" id="allrate" class="form-control" readonly   size="15"/></td>

  <td><span class="label nf"> Total  paid:</span></td>

   <td><input type="text" name="paidamt" id="allpaid" class="form-control" readonly  size="15"/></td>
  
    <td><span class="label nf"> Total  pending:</span></td>
 
     <td><input type="text" name="paidamt" id="allpending" class="form-control" readonly  size="15"/></td>
   </tr>
   
   
   
    </table>
   
   
	  <bR>
	  </br>
	 
	  
	  
	  

   
  <table align="center" >
   

 <tr>
   <td><span class="label nf"> Total Salary:</span></td>
   <td><input type="text" name="salary_total" id="salary_total" class="form-control"  value="<?php echo is_null($salary_tot)>0? "": $salary_tot;?>" readonly size="15"/></td>
   <td><span class="label nf"> Total Salary Advance :</span></td>
   <td><input type="text" name="salary_advance" id="salary_advance" class="form-control"  value="<?php echo is_null($salary_adv)>0? "": $salary_adv;?>" readonly size="15"/></td>
        <td><span class="label nf"> Expance Total:</span></td>
   <td><input type="text" name="expense" id="expense" class="form-control"  value="<?php echo is_null($expense_rate)>0? "": $expense_rate;?>" readonly size="15"/></td>
     
</tr>
 
 </table>
 <br>
 <br>
 <table align="center">
 
   	<tr>
<th>
 <span class="label nf"> OverAll Income:</span>
</th> 
<th>
 <span class="label nf"> OverAll Expance:</span>
</th>
<th>
 <span class="label nf"> Profit/Loss:</span>
</th>
  </tr>
  <tr height=15px>
   </tr>
  <tr>
  
 <td><input type="text"  id="totrate" class="form-control" readonly size="15"/></td>
 
 <td><input type="text"  id="allexpense" class="form-control" readonly size="15"/></td>
 

 <td><input type="text"  id="allin" class="form-control" readonly size="15"/></td>

  </tr>
  
</form>

   </body>

   </html>