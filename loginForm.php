<?php
session_start();
?>
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
    <header>
        <div id="logo"><a href="./"/></div>
        <div id="hlink">
            <ul>
                <li><a href="loginForm.php">로그인</a></li>
                <li><a href="#">회원가입</a></li>
            </ul>
        </div>
        <nav>
            <ul>
                <li class="n1"><a href="intro.php">홈페이지 소개</a></li>
                <li class="n2"><a href="community.php">커뮤니티</a></li>
                <li class="n3"><a href="pds.php">자료실</a></li>
                <li class="n4"><a href="survey.php">선호도 조사</a></li>
            </ul>
        </nav>
    </header>
    <div class="box-login">
        
            <img src="imgs/login_img.gif">

        <div class="login-form">
            <h3 class="hidden">회원 로그인</h3>
            <form id="form1" method="post" action="#" novalidate="novalidate" onsubmit="return false">
                <fieldset>
                    <!--                <legend>회원 로그인</legend>-->
                    <p>아이디 비밀번호를 입력하신 후, 로그인 버튼을 클릭해 주세요.</p>
                    <div class="login">
                        <input type="text" title="아이디" id="txtUserId" name="txtUserId" data-title="아이디를 " data-message="입력하세요." required="required" value="">
                        <input type="password" title="패스워드" id="txtPassword" name="txtPassword" data-title="패스워드를 " data-message="입력하세요." required="required">
                    </div>
                    <div class="save-id"><input type="checkbox" id="save_id"><label for="save_id">아이디 저장</label></div>
                    <button type="submit" id="submit" title="로그인"><span>로그인</span></button>
                    <div class="login-option">
                        <!--                    <a href="/user/login/find-account.aspx">아이디 찾기</a>-->
                        <!--                    <a href="/user/login/find-pw.aspx?act=pw">비밀번호 찾기</a>-->
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>