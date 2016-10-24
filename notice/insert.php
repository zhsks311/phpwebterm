<?php session_start();
include ("../db_conn.php");
include ("../session.php");

$mode=isset($_GET['mode'])? $_GET['mode']:'';
$html_ok=isset($_POST['html_ok'])? $_POST['html_ok']:'n';

$content=$_POST['content'];
$subject=$_POST['subject'];
$copied_file=isset($_GET['copied_file name'])?$_GET['copied_file name']:'';
$table=$_GET['table'];
$page=isset($_GET['page'])? $_GET['page']:1;
$sql="SELECT * FROM notice ORDER BY num desc";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$num=$row['num'];
?>
<meta charset="euc-kr">
<?php
	if($userId!='admin') {
		echo("
		<script>
	     window.alert('운영자만 사용가능 합니다.')
	     history.go(-1)
	   </script>
		");
		exit;
	}
	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장


	if ($mode=="modify")
	{
		$sql = "update $table set subject='$subject',content='$content' where num=$num";
		mysql_query($sql);  // $sql 에 저장된 명령 실행
	}
	else
	{
		if ($html_ok=="y")
		{
			$is_html = "y";
		}
		else
		{
			$is_html = "";
			$content = htmlspecialchars($content);
		}

		$sql = "insert into $table ";
		$sql .= "values($num+1, '$subject', '$content','$userName','$regist_day', 0, '$is_html' )";
//        echo $sql;
		mysql_query($sql);  // $sql 에 저장된 명령 실행
	}
	mysql_close($conn);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'list.php?table=$table&page=1';
	   </script>
	";
?>