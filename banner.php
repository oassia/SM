<?php

$str = $_SESSION['user'] . ".php";
$smarty->assign("site",$str);
$smarty->display("smarty/templates/home_link.tpl");
$smarty->display("smarty/templates/banner.tpl");
$smarty->display("smarty/templates/logout_link.tpl");

?>
