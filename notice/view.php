<?php
session_start();
include "../db_conn.php";
include "../session.php";
$table = $_GET['table'];
$num=$_GET['num'];
$page=$_GET['page'];

$sql = "select * from $table where num=$num";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

$item_num     = $row['num'];
$item_name    = $row['name'];
$item_hit     = $row['hit'];
$item_date    = $row['regist_day'];
$item_subject = str_replace(" ", "&nbsp;", $row['subject']);
$item_content = $row['content'];
$is_html      = $row['is_html'];

if ($is_html!="y")
{
    $item_content = str_replace(" ", "&nbsp;", $item_content);
    $item_content = str_replace("\n", "<br>", $item_content);
}
$new_hit = $item_hit + 1;
$sql = "update $table set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
mysql_query($sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="euc-kr">
    <link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/board4.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/reset5.css" rel="stylesheet" type="text/css">
    <link href="../css/front.css" rel="stylesheet" type="text/css">
    <link href="../css/themes/default/default.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <script>
        function del(href)
        {
            if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href;
            }
        }
    </script>
</head>

<body>

<div id="wrap">
    <?php include_once ("../header.php");?>
    <div id="content">
        <div id="col2">
            <div id="title">
                <img src="../img/title_notice.gif">
            </div>

            <div id="view_comment"> &nbsp;</div>
            <div id="view_title">
                <div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><?= $item_name ?> | 조회 : <?= $item_hit ?> | <?= $item_date ?> </div>
            </div>
            <div id="view_content">
                <?= $item_content ?>
            </div>
            <div id="view_button">
                <a href="list.php?table=<?= $table?>&page=<?=$page?>"><img src="../img/list.png"></a>&nbsp;
                <?php
                if($userId=='admin') {
                    ?>
                    <a href="write_form.php?table=<?= $table ?>&mode=modify&num=<?= $num ?>&page=<?= $page ?>"><img
                            src="../img/modify.png"></a>&nbsp;
                    <a href="javascript:del('delete.php?table=<?= $table ?>&num=<?= $num ?>')"><img
                            src="../img/delete.png"></a>&nbsp;
                    <a href="write_form.php?table=<?= $table ?>"><img src="../img/write.png"></a>
                    <?php
                }
                ?>

            </div>
            <div class="clear"></div>

        </div> <!-- end of col2 -->
    </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
