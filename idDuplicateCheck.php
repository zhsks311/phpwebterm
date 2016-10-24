<?php session_start() ?>
<script type="text/javascript" src="scripts/joinForm.js"></script>

<?php
include_once ('db_conn.php');

$i_id = $_POST["i_id"];
$sql="SELECT id FROM member WHERE id='$i_id'";
$result=mysql_query($sql);
$data = mysql_fetch_array($result);
mysql_close($conn);

if(!$data['id']) {
    ?>
    <b align='center'>사용가능합니다.</b>
    <?php
}
else {
    ?>
    <b align='center'>이미 존재하는 아이디입니다. 다른 아이디를 입력하세요.</b><br/>
    <?php
}
?>
