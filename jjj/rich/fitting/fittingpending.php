<?php

include_once("connect.php");


$result = mysqli_query($con, "SELECT id,Name,Contact,Rate,paid,pending FROM fitting where   pending>0  ORDER BY id ASC"); 
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
  <a class="active" href="fitting.php">Fitting</a>
  <a href="fittingpending.php">PendingDaily</a>
  <a href="fitreport.php">Report</a>
  
</div>


</body>
</html>


<html>
<head>	
	<title>Homepage</title>
</head>

<style>
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
<body>


	<table width='80%' border=1 id="customers">
 <tr>
  
   <th>NAME</th>
  <th>CONTACT</th>
   <th>RATE</th>
   <th>PAID</th>
 <th>PENDING</th>

<th>Actions</th>
   </tr>	

	
	<?php 
	
    while($res = mysqli_fetch_array($result)) { 
	
	
   
  
 
    echo"<tr>";
        echo "<td>".$res['Name']."</td>";
        echo "<td>".$res['Contact']."</td>";
        echo "<td>".$res['Rate']."</td>";
        echo "<td>".$res['paid']."</td>";
        echo "<td>".$res['pending']."</td>";
        echo "<td><a href=\"fitupdate.php?id=$res[id]\">Edit</a>  </td>";
        
          echo"</tr>" ;
      } 
	  
       

	?>
    <br>
      <br>
	</table>
</body>
</html>
