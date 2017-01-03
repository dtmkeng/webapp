<?php
    include("conndb.php");
	   
	$name = $_POST['name'];
	$id =1;
	$sql = "INSERT INTO input_text VALUES('$id','$name');";
	
	$qry = mysql_query($sql);
	
	   if(!$qry)
	   {
		   echo "เพิ่มข้อมูลผิดพลาด";
		   exit();
		   }
		   else 
		   {
			   echo "INSERT SCCUSS";
			   exit();
			   }
  

?>  