<?php
/**
 * Created by IntelliJ IDEA.
 * User: GoHyunyoung98
 * Date: 2016-06-05
 * Time: 오후 2:15
 */
session_start();
unset($_SESSION['userId']);
unset($_SESSION['userName']);
echo("<script>location.href=\"index.php\"</script>")
?>
