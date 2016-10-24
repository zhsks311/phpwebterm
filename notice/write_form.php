<?php
session_start();
include "../db_conn.php";
include "../session.php";

$mode=isset($_GET['mode'])? $_GET['mode']:'';
$table=$_GET['table'];
$page=isset($_GET['page'])? $_GET['page']:1;
$num=isset($_GET['num'])? $_GET['num']:1;
$item_subject = isset($row['subject'])? $row['subject']:null;
$item_content = isset($row['content'])? $row['content']:null;
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
        function check_input()
        {
            if (!document.board_form.subject.value)
            {
                alert("제목을 입력하세요!");
                document.board_form.subject.focus();
                return;
            }

            if (!document.board_form.content.value)
            {
                alert("내용을 입력하세요!");
                document.board_form.content.focus();
                return;
            }
            document.board_form.submit();
        }
    </script>
</head>
<?php
if ($mode=="modify")
{
    $sql = "select * from $table where num=$num";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $item_subject = isset($row['subject'])? $row['subject']:null;
    $item_content = isset($row['content'])? $row['content']:null;
}
?>
<body>
<div id="wrap">
    <?php include("../header.php");?>
    <div id="content">
        <div id="col2">
            <div id="title">
                <img src="../img/title_notice.gif">
            </div>
            <div class="clear"></div>

            <div id="write_form_title">
                <img src="../img/write_form_title.gif">
            </div>
            <div class="clear"></div>
            <?php
            if($mode=="modify")
            {
            ?>
            <form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data">
                <?php
                }
                else
                {
                ?>
                <form  name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data">
                    <?php
                    }
                    ?>
                    <div id="write_form">
                        <div class="write_line"></div>
                        <div id="write_row1"><div class="col1"> 이름 </div><div class="col2"><?=$userName?></div>
                            <?php
                            if( $userName && ($mode != "modify"))
                            {
                                ?>
                                <div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML 쓰기</div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="write_line"></div>
                        <div id="write_row2"><div class="col1"> 제목   </div>
                            <div class="col2"><input type="text" name="subject" value="<?= $item_subject?>" ></div>
                        </div>
                        <div class="write_line"></div>
                        <div id="write_row3"><div class="col1"> 내용   </div>
                            <div class="col2"><textarea rows="15" cols="79" name="content"><?= $item_content?></textarea></div>
                        </div>
                        <div class="write_line"></div>

                        <div class="clear"></div>
                    </div>

                    <div id="write_button"><a href="#"><img src="../img/ok.png" onclick="check_input()"></a>&nbsp;
                        <a href="list.php?table=<?=$table?>&page=<?=$page?>"><img src="../img/list.png"></a>
                    </div>
                </form>
            </form>
        </div> <!-- end of col2 -->
    </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
