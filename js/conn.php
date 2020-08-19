<?php
 $connhost = "localhost";
 $connuser = "root";
 $connpass = "root30323";
 $connDB = "pjmgdb";

 $c=mysql_connect($connhost,$connuser,$connpass); //เชื่อมตอ
	mysql_select_db($connDB,$c); //เลือกติดต่อกับฐานข้อมูลที่กำหนด
	mysql_query("set names utf8"); //เชื่อมต่อไปเป็นภาษาไทย
 	if(!$c){
		echo"<h3>Can't connect database!</h3>";
		exit();
	}
?>
