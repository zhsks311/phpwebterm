<?php
include "../db_conn.php";
$table=$_GET['table'];
$num=$_GET['num'];
$ripple_num=$_GET['ripple_num'];
$sql = "delete from rec_ripple where num=$ripple_num";
      mysql_query($sql);
      mysql_close($conn);

      echo "
	   <script>
	    location.href = 'view.php?table=$table&num=$num';
	   </script>
	  ";
?>
