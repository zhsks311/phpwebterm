    <div id="logo"><a href="../index.php"><img src="../img/logo.gif" border="0"></a></div>
	<div id="moto"><img src="../img/moto.gif"></div>
	<div id="top_login">
<?
    if(!$userid)
	{
?>
          <a href="../login/login_form.php">�α���</a> | <a href="../member/member_form.php">ȸ������</a>
<?
	}
	else
	{
?>
		<?php$usernick?> (level:<?php$userlevel?>) | 
		<a href="../login/logout.php">�α׾ƿ�</a> | <a href="../login/member_form_modify.php">��������</a>
<?
	}
?>
	 </div>
