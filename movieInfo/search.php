<?php
// 검색결과를 호출하고/파싱할 수 있는 파일은 Include 한다.
require_once 'searchAPI.php';

$movie = new MovieApiManager();

// 검색어가 입력된 경우 호출 객체로 전달하여 결과를 가져 온다.
if(isset($_POST['mode'])){
    if($_POST['mode'] == "search"){
        $result = $movie->getMovieData($_POST['query']);
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/board4.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/reset5.css" rel="stylesheet" type="text/css">
    <link href="../css/front.css" rel="stylesheet" type="text/css">
    <link href="../css/themes/default/default.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <title>BOOK API</title>

    <style>
        body,p,h1,h2,h3,h4,h5,h6,ul,ol,li,dl,dt,dd,table,th,td,form,fieldset,legend,input,textarea,button,select{margin:0;padding:0}
        body,input,textarea,select,button,table{font-family:'돋움',Dotum,AppleGothic,sans-serif;font-size:12px}
        img,fieldset{border:0}
        ul,ol{list-style:none}
        em,address{font-style:normal}
        a{text-decoration:none}
        a:hover,a:active,a:focus{text-decoration:underline}
        .search_shop {margin: 10px;}
        .result{ margin: 20px;}
        .srch{width:100%;padding:5px 0; margin: 0px 10px;}
        .srch legend{overflow:hidden;visibility:hidden;position:absolute;top:0;left:0;width:1px;height:1px;font-size:0;line-height:0}
        .srch{color:#c4c4c4;text-align:left}
        .srch select,.srch input{margin:-1px 0 1px;font-size:12px;color:#373737;vertical-align:middle}
        .srch .keyword{margin-left:1px;padding:2px 3px 5px;border:1px solid #b5b5b5;font-size:12px;line-height:15px}
        .tbl_type,.tbl_type th,.tbl_type td{border:0}
        .tbl_type{width:100%;border-bottom:2px solid #dcdcdc;font-family:Tahoma;font-size:11px;text-align:center}
        .tbl_type caption{display:none}
        .tbl_type th{padding:7px 0 4px;border-top:2px solid #dcdcdc;background-color:#f5f7f9;color:#666;font-family:'돋움',dotum;font-size:12px;font-weight:bold}
        .tbl_type td{padding:6px 0 4px;border-top:1px solid #e5e5e5;color:#4c4c4c}
    </style>
</head>
<body>
<div id="wrap">
    <?php
    include_once "../header.php";
    ?>
    <div class="search_shop">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="mode" value="search" />
            <fieldset class="srch">
                <legend>검색영역</legend>
                <input type="text" name="query" id="query" accesskey="s" title="검색어" class="keyword">
                <input type="submit" id="search" value="검색" />
            </fieldset>
        </form>
        <table cellspacing="0" border="1" summary="영화 검색 API 결과" class="tbl_type">
            <caption>영화 검색 API 결과</caption>
            <colgroup>
                <col width="30%">
                <col width="30%">
                <col width="10%">
                <col width="20%">
                <col width="10%">
            </colgroup>
            <thead>
            <tr>
                <th scope="col">사진</th>
                <th scope="col">영화</th>
                <th scope="col">개봉연도</th>
                <th scope="col">국가</th>
                <th scope="col">평점</th>
            </tr>
            </thead>
            <tbody id="list">
            <?php

            // 결과를 반복문(foreach)를 사용하여 페이지에 표현한다.
            if(isset($result)){
                foreach ($result as $data){
                    ?>
                    <tr>
                        <td><img src="<?php echo $data['image'];?>"  width="70px" height="100px" /></td>
                        <td><?=$data['title'];?>"</td>
                        <td><?=$data['year'];?></td>
                        <td><?=$data['nation'];?></td>
                        <td><?=$data['rating'];?></td>
                    </tr>
                <?php }?>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
