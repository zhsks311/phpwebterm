<?

  include "/WebTerm/db_conn.php";
   $composer = $_GET['composer'];
  
   $sql = "update survey set $composer = $composer + 1";

   mysql_query($sql);

   mysql_close();
   
   Header("location:result.php");
?>

