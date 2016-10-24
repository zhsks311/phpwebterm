<?php
session_start();
include_once ('db_conn.php');
$p_id=$_POST["txtUserId"];
$p_pass=$_POST["txtPassword"];
if(!$conn)
    die("Failed to Connect Database");

$sql = "SELECT * FROM member WHERE (id='$p_id' and pass=password('$p_pass'))";
$result=mysql_query($sql);
$data = mysql_fetch_array($result);
mysql_close($conn);

if($data['id']){
    $_SESSION['userId']=$p_id;
    $_SESSION['userName']=$data['name'];
    $_SESSION['userSex']=$data['sex'];
    $_SESSION['userBirthday']=$data['birthday'];
    $_SESSION['userEmail']=$data['email'];
    $_SESSION['userHp']=$data['hp'];
    
    echo "<script>alert('로그인 성공')</script>";
    echo "<script>location.href=\"index.php\"</script>";
}
else{
    echo "<script>alert('아이디 혹은 비밀번호가 맞지 않습니다.')</script>";
    echo ("<script>history.go(-1)</script>");
}
