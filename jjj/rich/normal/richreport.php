<?php

include_once("connect.php");


$result = mysqli_query($con, "SELECT * FROM dailyinsert ORDER BY id DESC"); 
$rowCount = mysqli_num_rows($result);
?>
<?php
$rate1="";
$paid1="";
$pending1="";
if(isset($_POST['search']))
{
	
    $valueToSearch = $_POST['valueToSearch'];
    $from_date= $_POST['from_date'];
	$to_date= $_POST['to_date'];
    
    
	$query = "SELECT * FROM dailyinsert WHERE CONCAT (`sno`,`Name`,`Contact`,`size`,`date`,`rate`,`totalsqr`,`subtotal`,`paid`,`pending`) LIKE '%".$valueToSearch."%'";
	
		
	
	 $query1 = "SELECT sum(a.rate) as rate1,sum(a.pending)as pending1,sum(a.paid)as paid1
	FROM dailyinsert a  WHERE CONCAT (`sno`,`Name`,`Contact`,`size`,`date`,`rate`,`totalsqr`,`subtotal`,`paid`,`pending`) LIKE '%".$valueToSearch."%'";
	
if($from_date!=null && $from_date!=''){
		$query=$query.' and date >="'.$from_date.'"';
		$query1=$query1.' and date >="'.$from_date.'"';
	}
	
	if($to_date!=null && $to_date!=''){
	$query=$query.' and date <="'.$to_date.'"';
	$query1=$query1.' and date <="'.$to_date.'"';
	}

	
	$result = filterTable($query);

	
	 $connect1 = mysqli_connect("localhost", "root", "", "rich");
    $result1= mysqli_query($connect1, $query1);
	$count1=0;
	while($res = mysqli_fetch_array($result1))
{

  $rate1 =$res['rate1'];
  $paid1 =$res['paid1'];
  $pending1=$res['pending1'];
   

   
if(is_null($rate1 && $paid1 &&$pending1 )){
	$count1=1; 
}

	if($count1== 1){
  echo '<script>alert("Record Not Found!");</script>';
	
}
}		
	$rowCount = mysqli_num_rows($result);
	if($rowCount<= 0){
  echo '<script>alert("Record Not Found!"); window.location = "richreport.php";</script>';

}
}
 else {
    $query = "SELECT * FROM dailyinsert";
    $result = filterTable($query);
}




function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "rich");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

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
  <a class="active" href="richsales.php">NormalFlex</a>
  <a href="pendingdaily.php">PendingDaily</a>
  <a href="richreport.php">Report</a>
  
</div>



</body>
</html>










<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<script type="text/javascript">

       function PrintDoc() {
		        var toPrint = document.getElementById('printarea');

        var popupWin = window.open('', '_blank', 'width=800,height=1200,location=no,left=200px');

        popupWin.document.open();

        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css"media="print" /></head><body onload="window.print()">')

		var spge = '<?php echo $rowCount ;?>';
 for(var i=0;i<spge;i++){
 document.getElementById(i).style="display: none;"
  document.getElementById('TH'+i).style="display: none;"
 }
        popupWin.document.write(toPrint.innerHTML);

        popupWin.document.write('</html>');

        popupWin.document.close();
			var spge = '<?php echo $rowCount ;?>';
 for(var i=0;i<spge;i++){
 document.getElementById(i).style="display: show;"
  document.getElementById('TH'+i).style="display: show;"
 }

    }



</script>

<form action="" method="post">
        <input type="text" name="valueToSearch" class="textbox" placeholder="Search">
		
		
 <input   class="button" type="submit"  value="Go"name="search">
 
             
             &emsp; &emsp; <label for="dt">From Date: </label> <input name="from_date" type="date"/>  
             &emsp;       <label for="dt">TO Date: </label> <input name="to_date" type="date"/>
					<br>
					<br>
					<br>
					
Rate Total:<input type="text" name="dailyrate" id="dailyrate"value="<?php echo is_null($rate1)>0? "": $rate1;?>" size="7"/>

Paid Total:<input type="text" name="dailypaid" id="dailypaid"value="<?php echo is_null($paid1)>0? "": $paid1;?>" size="7"/>

Pending Total:<input type="text" name="dailypending" id="dailypending"value="<?php echo is_null($pending1)>0? "": $pending1;?>" size="7"/>	
						
   <input type="button" value="Print" id="button-search" class="button1" onclick="PrintDoc();"/>
 <div id="printarea">
<div id="content-input">
<center>
<h2> DAILY SALES REPORT</h2>
<style>

@media print {
	
  .body{
		width: 95%;
		height: auto;
		margin: 50px auto;
	}
}


	body {
  background: url('') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Roboto', Tahoma, Arial, sans-serif;
  line-height: 1.5;
  font-size: 13px;
}



form > .textbox {
  outline: 0;
  height: 40px;
  width: 200px;
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
  float: right;
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
<table width='80%' border=1 id="customers">
<tr>
<th>SN0</th>
	 <th>DATE</th>
	<th>Name</th>
    <th>Contact</th>
    <th>size</th>
 <th>rate</th>
	<th>totalsqr</th>
        <th>subtotal</th>
		<th>paid</th>
		<th>pending</th>
<th>updated_date</th>
	 <th >ACTIONS</th>
      </tr>
  <?php 

    while($res = mysqli_fetch_array($result)){
	

   	
		    echo "<tr>";	
        echo "<td>".$res['sno']."</td>";			
        echo "<td>".$res['date']."</td>";
		 echo "<td>".$res['Name']."</td>";
       echo "<td>".$res['Contact']."</td>";
        echo "<td>".$res['Size']."</td>";
       
        echo "<td>".$res['Rate']."</td>";
 
		echo "<td>".$res['totalsqr']."</td>";
        echo "<td>".$res['subtotal']."</td>";
		echo "<td>".$res['paid']."</td>";
      	echo "<td>".$res['pending']."</td>";
		echo "<td>".$res['updateddate']."</td>";
        echo "<td ><a href=\"richupdate.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
   echo "</tr>";	
   //$printVarible2=$printVarible1.++$printVarible;		
   //id=$printVarible2
       //id=$printVarible
        
      } 
       ?>
	
<br>
<br>
</table>

</div><!-- end of content-input -->
</div>
</form>
</body>
</html>