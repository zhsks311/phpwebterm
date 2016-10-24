<?php
session_start();
include "../db_conn.php";
$table=$_GET['table'];
$num=$_GET['num'];

$sql = "select * from $table where num = $num";
$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$sql = "delete from $table where num = $num";
mysql_query($sql);

mysql_close();

echo "
	   <script>
	    location.href = 'list.php?table=$table';
	   </script>
	";
?>

