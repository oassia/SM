<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:47:10
  from "C:\xampp\htdocs\SM\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3c0e41a5a2_14708377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131deb0eb92f2fbda4d43cf494851c71683c6527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\login.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3c0e41a5a2_14708377 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head><link href="smarty/templates/styles/1.css" rel="stylesheet" type="text/css">
</head>
<h2 align = "center">Welcome to VSM</h2>
<div align = "center">
<p>Enter username and password to login</p>
<form name = "form1" method = "post" action = "login.php">
<p>Username : <input type = "text" name = "txtuser" ></p>
<p>Password :  <input type = "password" name = "txtpass" >
</p>
<p><input type = "submit" name = "login" value = "Login"></p>
</form>
</div><?php }
}
