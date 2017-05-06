<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:47:37
  from "C:\xampp\htdocs\SM\smarty\templates\client.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3c29412379_80066157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58808f4ee54dc01a9aa0f19044d1dca0be0d7774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\client.tpl',
      1 => 1493974056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3c29412379_80066157 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\SM\\smarty\\libs\\plugins\\function.html_options.php';
?>
<html>
<head>
<title>VSM CLIENT</title>

<style type="text/css">
<!--
.style1 {color: #0080C0}
-->
</style>



<link href="smarty/templates/styles/1.css" rel="stylesheet" type="text/css">

</head>
<BODY>
<h3 align="center" class="style1">Welcome to VSM </h3>

<form name="select_service_name" method="post" action="client.php">
<div style="margin-left:30%; margin-right:30%; ">
<table cellpadding="10" cellspacing="10">
<TR>
 <TD>Customer ID </TD>
 <td align="left"><?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
</td>
</TR>
<TR>
 <TD>Current Balance </TD>
 <td align="left"><?php echo $_smarty_tpl->tpl_vars['current_balance']->value;?>
</td>
</TR>
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
<input type="hidden" name="customer_id" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
"/>
<input type="hidden" name="_submit_check" value="1"/>
</form>
</div>






</body>
</html>

<?php }
}
