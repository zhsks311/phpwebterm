<?php
  include "/WebTerm/db_conn.php";
  
   $sql = "select * from test.survey";

   $result = mysql_query($sql); 

   $row = mysql_fetch_array($result); // mysqli_fetch_array ?�수��??�용?�여 값을 가?�옴 

    mysql_close();

?>
<html>
 <head>
  <title> 설문조사  </title>
  <meta charset="euc-kr">
  <script>
      function update()
      {
        var vote;
        var length = document.survey_form.composer.length; 

        for (var i=0; i<length; i++)
        {
           if (document.survey_form.composer[i].checked == true)
           {
                vote= document.survey_form.composer[i].value;
                break;
           }
        }

        if (i == length)
        {
           alert("문항을 선택하세요!!");
           return;
        }
        vote = "update.php?composer=" + vote;
        window.open(vote , "", 
              "left=200, top=200, width=160, height=250, status=no, scrollbars=no");
    }

  	  function result()
    {
         window.open("result.php" , "", 
              "left=200, top=200, width=160, height=250, status=no, scrollbars=no");
    }
</script>
 </head> 
<body>
  <form name=survey_form method=post > 
    <table border=0 cellspacing=0 cellpdding=0 width='200' align='center'>
      <input type=hidden name=kkk value=100>
        <tr height=40>
          <td></td>
        </tr>
        <tr height=1 bgcolor=#cccccc><td></td></tr>
       <tr height=7><td></td></tr>
       <tr><td><b><? echo $row['title']; ?></b></td></tr>
       <tr><td><input type=radio name='composer' value='ans1' >1. <? echo $row['name1']; ?></td></tr>
       <tr height=5><td></td></tr>
       <tr><td><input type=radio name='composer' value='ans2' >2. <? echo $row['name2']; ?></td></tr>
       <tr height=5><td></td></tr>
       <tr><td><input type=radio name='composer' value='ans3' >3. <? echo $row['name3']; ?></td></tr>
       <tr height=5><td></td></tr>
       <tr><td><input type=radio name='composer' value='ans4' >4. <? echo $row['name4']; ?></td></tr>
       <tr height=7><td></td></tr>
       <tr height=1 bgcolor=#cccccc><td></td></tr>
       <tr>
       <tr height=7><td></td></tr>
       <tr>
         <td align=middle><img src="/img/ok.jpg" border="0" width="25" height="25"  style='cursor:hand' 
            onclick=update()></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <img src="/img/chart.png" border="0" width="25" height="25" style='cursor:hand' 
               onclick=result()></a></td></tr>
    </table>
  </form>
</body>
</html>
