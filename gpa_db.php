<?php
include("conndb.php");

$sql= "SELECT * FROM gpa_table;";

$result = mysql_query($sql);
    while($row=mysql_fetch_array($result,MYSQLI_ASSOC))
	{
	 echo "<tr>";
	 echo "<td>".$row['ccode']."</td>"."</br>";
	 echo "<td>".$row['title']."</td>"."</br>";
	 echo "<td>".$row['credit']."</td>"."</br>";	
	 echo "<td>".$row['gpa']."</td>"."</br>";	
	 echo "</tr>";	
	}
	mysql_free_result($result);
?>
