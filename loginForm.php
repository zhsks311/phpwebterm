
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movie</title>
    <link href="css/reset5.css" rel="stylesheet" type="text/css">
    <link href="css/front.css" rel="stylesheet" type="text/css">
    <link  href="css/themes/default/default.css" rel="stylesheet" type="text/css">
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css">
    <link href="css/bjqs.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
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
                <li class="n1"><a href="company.php">회사소개</a></li>
                <li class="n2"><a href="product.php">제품정보</a></li>
                <li class="n3"><a href="community.php">커뮤니티</a></li>
                <li class="n4"><a href="customer.php">고객지원</a></li>
            </ul>
        </nav>
    </header>
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <?php
            for ($i=1;$i<=3;$i++)
                echo ("<img src=\"imgs/movie_image$i.png\" width=\"944\" height=\"451\">");
            ?>
        </div>
    </div>
</div>
<div>
    <form id="login" action="loginForm.php" method="POST" accept-charset="utf-8">
        <input type="text" name="userId" id="userId"/>
        <input 
    </form>
</div>

</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="scripts/bjqs-1.3.min.js"></script>
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
    //
    $(document).ready(function() {

        $('#slide').bjqs({
            'animtype' : 'slide',
            showcontrols : false,
            showmarkers : false,
            'width' : 165,
            'height' : 130
        });

    });
</script>
</html>