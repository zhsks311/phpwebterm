<html>
 <head>
  <title> 설문조사  </title>
  <meta charset="euc-kr">
  <script>
      var str="";
      var count = 4;
 	function add()
	{
        if(count<=6)
        {
            var str="";
            var div = document.getElementById("add");
            count++; 
            str += "<tr height=5><td></td></tr>";
        str += "<tr><td><input type='text' id = '" + count + "' name='composer" +  count +"' value='蹂닿린4'  /></td></tr>";
            
            var inner = document.createElement('div');
            inner.id = count;
            inner.innerHTML = str;
            div.appendChild(inner);
        }
    }
    
    function remove()
	{
        var div = document.getElementById('add');
        if(count<=4)
            alert("留덉?留?蹂닿린?낅땲??");
        else{
            var inner = document.getElementById(count);
            div.removeChild(inner);
             count--;
        }

	}
  
  
      function update()
      {
        
        window.open("insert.php" , "", 
              "left=200, top=200, width=250, height=250, status=no, scrollbars=no");
    }
    function saveCount()
    {
        
        document.getElementById("count").value = count; 
        
    }

</script>

 </head> 
<body>
  <form action = "insert.php" name=survey_form method=post > 
    <table border=0 id = 'table' cellspacing=0 cellpdding=0 width='200' align='center'>
        </td></tr>
        <tr><td><input type="text" name="title" value = "?쒕ぉ???낅젰?섏꽭?? /></td></tr>
        <input type="hidden" id = "count" name="count" />
        <tr height=1 bgcolor=#cccccc><td></td></tr>
       <tr height=7><td></td></tr>
       <tr><td><div id="add"></div></td></tr>
       <tr><td><input type="text" id='1' name='composer1' value='蹂닿린1'/></td></tr>
       <tr height=5><td></td></tr>
       <tr><td><input type="text" id='2'  name='composer2' value='蹂닿린2' /></td></tr>
       <tr height=5><td></td></tr>
       <tr><td><input type="text" id='3'  name='composer3' value='蹂닿린3' /></td></tr>
       <tr height=5><td></td></tr>
       <tr><td><input type="text" id='4'  name='composer4' value='蹂닿린4'  /></td></tr>
       <tr height=7><td></td></tr>
       <tr height=1 bgcolor=#cccccc><td></td></tr>
       <tr>
       <tr height=7><td></td></tr>
       <tr>
        <td align="center"><input type="submit" onclick = saveCount() img="../img/ok.jpg" border="0" width="25" height="25"  style='cursor:hand' ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../img/ok.jpg" border="0" width="25" height="25"  style='cursor:hand' onclick=add()></a>
         <img src="../img/ok.jpg" border="0" width="25" height="25"  style='cursor:hand' onclick=remove()></a>
         
	</table>
  </form>
</body>
</html>
