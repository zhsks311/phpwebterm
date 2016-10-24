<?php session_start()?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movie</title>
    <link href="css/reset5.css" rel="stylesheet" type="text/css">
    <link href="css/front.css" rel="stylesheet" type="text/css">
    <link href="css/themes/default/default.css" rel="stylesheet" type="text/css">
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css">
    <link href="css/bjqs.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrap">
    <?php include_once ('header.php');?>
    <div class="box-login">
        <img src="imgs/login_img.gif">
        <div class="login-form">
            <h3 class="hidden">회원 로그인</h3>
            <form id="form1" method="post" action="loginCheck.php" novalidate="novalidate">
                <fieldset>
                    <p>아이디 비밀번호를 입력하신 후, 로그인 버튼을 클릭해 주세요.</p>
                    <div class="login">
                        <input type="text" title="아이디" id="txtUserId" name="txtUserId" data-title="아이디를 " data-message="입력하세요." required="required" value="">
                        <input type="password" title="패스워드" id="txtPassword" name="txtPassword" data-title="패스워드를 " data-message="입력하세요." required="required">
                    </div>
                    <button type="submit" id="submit" title="로그인"><span>로그인</span></button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>
