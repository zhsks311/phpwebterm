<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
<header>
    <div id="logo" ><a href="/WebTerm/index.php"></a></div>
 <div id="survey"><a href="/WebTerm/survey/survey.php" style="margin:61px;top:60px;padding:0;border:0;outline:0;">설문조사</a></div>
    <?php include_once ("top_login.php");?>
   
    <nav>
        <ul>
            <li class="n1"><a href="/WebTerm/notice/list.php?page=1">공지사항</a></li>
            <li class="n2"><a href="/WebTerm/movieinfo/search.php">영화정보</a></li>
            <li class="n3"><a id='id_comm' href="/WebTerm/free/list.php?mode=&page=1">커뮤니티</a>

                <script type="text/javascript">
                    $("li.n3").hover(function () {
                            $("li.n3 a").after("<ul><ul class=\"u1\"><a href=\"/WebTerm/free/list.php?page=1\">궁금한것</a></ul>");
                            $("ul ul.u1").after("<ul class=\"u2\"><a href=\"/WebTerm/rec/list.php?page=1\">영화추천</a></ul></ul>");
                        },
                        function () {
                            $("ul ul.u1").remove();
                            $("ul ul.u2").remove();
                        });
                </script>

            </li>
            <li class="n4"><a id='id_comm' href="/WebTerm/download/list.php?mode=&page=1">자료실</a></li>
        </ul>
    </nav>
</header>
