<?php
include("conndb.php");

$sql= "SELECT * FROM activity_table;";

$result = mysql_query($sql);
    while($row=mysql_fetch_array($result,MYSQLI_ASSOC))
	{
	 echo "<tr>";
	 echo "<td>".$row['count']."</td>"."</br>";
	 echo "<td>".$row['list']."</td>"."</br>";
	 echo "<td>".$row['edit']."</td>"."</br>";	
	 echo "<td>".$row['total']."</td>"."</br>";	
	 echo "</tr>";	
	}
	mysql_free_result($result);
	 
?>
