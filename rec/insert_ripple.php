<?php
session_start();
include_once ("../session.php");
?>
<meta charset="euc-kr">
<?php
if(!$userId) {
    echo("
	   <script>
	     window.alert('로그인 후 이용하세요.')
	     history.go(-1)
	   </script>
	 ");
    exit;
}
include "../db_conn.php";


$num=$_GET['num'];
$ripple_content=$_POST['ripple_content'];
$table=$_GET['table'];
$regist_day = date("Y-m-d (H:i)");

$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

// 레코드 삽입 명령
$sql = "insert into rec_ripple (parent, id, name, content, regist_day) ";
$sql .= "values($num, '$userId', '$userName', '$ripple_content', '$regist_day')";

mysql_query($sql);  // $sql 에 저장된 명령 실행
mysql_close();                // DB 연결 끊기

echo "
	   <script>
	    location.href = 'view.php?table=$table&num=$num';
	   </script>
	";
?>

   
