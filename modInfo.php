<?php
session_start();
include_once ("db_conn.php");
if(!$conn)
    die("Failed to Connect Database");

$i_pass=$_POST['i_pass'];
$i_name=$_POST['i_name'];
$i_sex=$_POST['i_sex'];
$i_birth_year=$_POST['i_birth_year'];
$i_birth_month=$_POST['i_birth_month'];
$i_birth_day=$_POST['i_birth_day'];
$i_birth_type=$_POST['i_birth_type'];
$i_email1=$_POST['i_email1'];
$i_email2=$_POST['i_email2'];
$i_mobile_1=$_POST['i_mobile_1'];
$i_mobile_2=$_POST['i_mobile_2'];
$i_mobile_3=$_POST['i_mobile_3'];

$id=$_SESSION['userId'];
$pass=$i_pass;
$name=$i_name;
$sex=$i_sex;
$birthday=$i_birth_year.'-'.$i_birth_month.'-'.$i_birth_day.'('.$i_birth_type.')';
$email=$i_email1.'@'.$i_email2;
$hp=$i_mobile_1.'-'.$i_mobile_2.'-'.$i_mobile_3;

$test[0]=$id;
$test[1]=$pass;
$test[2]=$name;
$test[3]=$sex;
$test[4]=$birthday;
$test[5]=$email;
$test[6]=$hp;

$sql = "UPDATE member SET pass=password('$pass'),name='$name',sex='$sex',birthday='$birthday',email='$email',hp='$hp' WHERE id='$id'";

mysql_query($conn, $sql);

echo json_encode($test);

mysql_close($conn);
?>
