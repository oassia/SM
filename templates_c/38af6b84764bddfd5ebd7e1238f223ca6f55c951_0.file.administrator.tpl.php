<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:46:38
  from "C:\xampp\htdocs\SM\smarty\templates\administrator.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3beed2d8e5_09999465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38af6b84764bddfd5ebd7e1238f223ca6f55c951' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\administrator.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3beed2d8e5_09999465 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\SM\\smarty\\libs\\plugins\\function.html_options.php';
?>
<html>
<head>
<title>VSM ADMINISTRATOR</title>
<link href="smarty/templates/styles/3.css" rel="stylesheet" type="text/css">

</head>
<BODY>

<BR><BR>
<h2 align="center">Welcome to VSM</h2>
<h3 align="center">Administrator</h3>

<form name="select_service_name" method="post" action="administrator.php"><div style="margin-left:30%; margin-right:30%; margin-top:5%">
<table cellpadding="10" cellspacing="10">


<tr>

 <TD>Select Service </TD>
 <td align="left"><select name="service_name">
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['servicenames']->value),$_smarty_tpl);?>

    </select>  </td>

</tr>

<tr>

<TD colspan="2" align="center">
<input type="submit" name="submit" value="Go >> ">
</TD>

</tr>

</table>

</div>
<input type="hidden" name="_submit_check" value="1"/>
</form>







</body>
</html>

<?php }
}
