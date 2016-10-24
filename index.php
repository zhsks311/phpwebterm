<?php
session_start();
include_once ("db_conn.php")
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movie</title>
    <link href="css/reset5.css" rel="stylesheet" type="text/css">
    <link href="css/front.css" rel="stylesheet" type="text/css">
    <link href="css/themes/default/default.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css">

</head>
<body>

<div id="wrap">
    <?php include_once ('header.php');?>
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <?php
            for ($i=1;$i<=3;$i++)
                echo ("<img src=\"imgs/movie_image$i.png\" width=\"944\" height=\"451\">");
            ?>
        </div>
    </div>
    <div>
        <iframe align="left" src="calendar.html" scrolling="yes" width="850px" height="230px"></iframe>
    </div>
    <div class="clear"></div>
    <div id="justar">
        <figure id="slide">
            <ul class="bjqs">
                <?php $d=mt_rand(1,3)?>
                <video src="./movie/play<?=$d?>.mp4" controls autoplay muted width="270px"></video>
            </ul>
        </figure>
    </div>
    <div id="notinews">
        <div class="container">
            <ul class="tabs">
                <li><a href="#tab1">공지사항</a></li>
                <li><a href="#tab2">궁금한것</a></li>
                <li><a href="#tab3">영화추천</a></li>
                <li><a href="#tab4">자료실</a></li>
            </ul>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <ul>
                        <?php
                        $sql="SELECT num,subject FROM notice ORDER BY num DESC";
                        $result=mysql_query($sql);
                        for($i=0;$i<7;$i++){
                            $row=mysql_fetch_array($result);
                            ?>
                            <li><a href="./notice/view.php?table=notice&num=<?=$row['num']?>&page=1"><?=$row['subject']?></a></li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>
                <div id="tab2" class="tab_content">
                    <ul>
                        <?php
                        $sql="SELECT num,subject FROM free ORDER BY num DESC";
                        $result=mysql_query($sql);
                        for($i=0;$i<7;$i++){
                            $row=mysql_fetch_array($result);
                            ?>
                            <li><a href="./notice/view.php?table=free&num=<?=$row['num']?>&page=1"><?=$row['subject']?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div id="tab3" class="tab_content">
                    <ul>
                        <?php
                        $sql="SELECT num,subject FROM rec ORDER BY num DESC";
                        $result=mysql_query($sql);
                        for($i=0;$i<7;$i++){
                            $row=mysql_fetch_array($result);
                            ?>
                            <li><a href="./notice/view.php?table=rec&num=<?=$row['num']?>&page=1"><?=$row['subject']?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div id="tab4" class="tab_content">
                    <ul>
                        <?php
                        $sql="SELECT num,subject FROM download ORDER BY num DESC";
                        $result=mysql_query($sql);
                        for($i=0;$i<7;$i++){
                            $row=mysql_fetch_array($result);
                            ?>
                            <li><a href="./notice/view.php?table=download&num=<?=$row['num']?>&page=1"><?=$row['subject']?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <iframe src="map.php"></iframe>

<!--    <div id="social">-->
<!---->
<!--        <h3>social network</h3>-->
<!--        <ul>-->
<!--            <li><a href="#"><img src="imgs/icon1.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon2.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon3.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon4.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon5.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon6.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon7.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon8.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon9.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon10.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon11.png" width="33" height="32"></a></li>-->
<!--            <li><a href="#"><img src="imgs/icon12.png" width="33" height="32"></a></li>-->
<!--        </ul>-->
<!--    </div>-->

<div class="clear"></div>
<footer>
    <address>Hyunyoung Goh & Jaehwi Kim copyright. Contact: gohyunyoung98@gmail.com<br>
        천안시 병천면 가전리 한국기술교육대학교 | Tel : +82-3660-0908  | +82-4148-7450 </address>
</footer>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    // 아래는 tab 메뉴
    $(document).ready(function() {
        //Default Action
        $(".tab_content").hide(); //Hide all content
        $("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(".tab_content:first").show(); //Show first tab content
        //On Click Event
        $("ul.tabs li").click(function() {
            $("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content
            var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active content
            return false;
        });
    });
</script>
</body>
</html>
