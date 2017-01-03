<?php
 include "conndb.php";
 
 $name = $_POST['name'];
 $text = $_POST['text'];
 
 $sql= "INSERT INTO input_text VALUES ('$text','$name')";
 
 $qry =mysql_query($sql);
 
 if(!$qry)
 {
	 echo "FIIIII";
	 }
	 else
	 {
		 echo"Thaaaaaa";
		 }
?>