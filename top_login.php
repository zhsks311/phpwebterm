<?php

if(!isset($_SESSION['userId']) || !isset($_SESSION['userName'])) {
    ?>
    <div id="hlink">
        <ul>
            <li><a href="/WebTerm/loginForm.php">로그인</a></li>
            <li><a href="/WebTerm/joinForm.php">| 회원가입</a></li>
        </ul>
    </div>
    <?php
}
else {

    ?>
    <div id="hlink">
        <ul>
            <li>
                <span> <?php echo $_SESSION['userName']?> 님 안녕하세요</span>
                (<a href="/WebTerm/memModifyForm.php"><?php echo $_SESSION['userId']?></a>)
            </li>
            <li><a href="/WebTerm/logout.php">| 로그아웃</a></li>
            <li><a href="/WebTerm/joinForm.php">| 회원가입</a></li>
        </ul>
    </div>
    <?php
}
?>
