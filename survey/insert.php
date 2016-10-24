<?php
   mysql_query("SET NAMES 'utf8'");
    include "/WebTerm/db_conn.php";
  
   $count = $_POST['count'];
   $title = $_POST['title'];
   $sql = "update survey set title=\'$title\', count = $count";
   for($i=1;$i<=$count;$i++)
   {
       ${composer.$i} = $_POST['composer'.$i]; 
       $sql .= ", name".$i."=\'".${composer.$i}."\'";
   }
   $sql .= ", ans1 = 0, ans2 = 0, ans3 = 0, ans4 = 0, ans5 = 0, ans6 = 0 where id=0;";
   
   mysql_query($sql,$connect);
    
    mysql_close();
    
 
?>

<script>
document.write('<? echo $sql; ?>');
alert('<? echo $composer1; ?>');
 </script>


