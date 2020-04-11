<?php 
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
unset($_SESSION["usuario"]);
/*session deleted. if you try using this you've got an error*/
echo '<script language="javascript">window.location="../Front/mbc/loggin.html"</script>';