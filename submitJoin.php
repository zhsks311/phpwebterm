<?php
session_start();

include_once ('db_conn.php');
if(!$conn)
    die("Failed to Connect Database");

$checkId = $_POST['checkId'];

$sql = "SELECT * FROM member WHERE id='$checkId'";
$result=mysql_query($sql);
$data = mysql_fetch_object($result);

//아이디가 존재하지않을때만
if(!$data) {
    $i_id = $_POST['i_id'];
    $i_pass = $_POST['i_pass'];
    $i_name = $_POST['i_name'];
    $i_sex = $_POST['i_sex'];
    $i_birth_year=$_POST['i_birth_year'];
    $i_birth_month=$_POST['i_birth_month'];
    $i_birth_day=$_POST['i_birth_day'];
    $i_birth_type=$_POST['i_birth_type'];
    $i_email1=$_POST['i_email1'];
    $i_email2=$_POST['i_email2'];
    $i_mobile_1=$_POST['i_mobile_1'];
    $i_mobile_2=$_POST['i_mobile_2'];
    $i_mobile_3=$_POST['i_mobile_3'];

    $id=$i_id;
    $pass=$i_pass;
    $name=$i_name;
    $sex=$i_sex;
    $birthday=$i_birth_year.'-'.$i_birth_month.'-'.$i_birth_day.'('.$i_birth_type.')';
    $email=$i_email1.'@'.$i_email2;
    $hp=$i_mobile_1.'-'.$i_mobile_2.'-'.$i_mobile_3;

    $sql="INSERT INTO member VALUES ('$id',password('$pass'),'$name','$sex','$birthday','$email','$hp')";
    mysql_query($sql);
    echo json_encode(true);
}
else{
    echo json_encode(false);
}
mysql_close($conn);
?>
