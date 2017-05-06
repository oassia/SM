<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:46:46
  from "C:\xampp\htdocs\SM\smarty\templates\changeshareprice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3bf680ae23_26648747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df56f94cc9512569a2986a10d323053caa83a8b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\changeshareprice.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3bf680ae23_26648747 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>VSM CHANGE SHAREPRICE</title>
<link href="smarty/templates/styles/3.css" rel="stylesheet" type="text/css">




</head>
<BODY>

<BR><BR>
<h3 align="center">CHANGE SHARE PRICE</h3>









<table align="left" cellpadding="5" cellspacing="5">


<tr>
<TH>Company Name</TH>
  <TH>Current SharePrice</TH> 
</tr>


<?php
$__section_company_name_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name'] : false;
$__section_company_name_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['company_names']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_company_name_0_total = $__section_company_name_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_company_name'] = new Smarty_Variable(array());
if ($__section_company_name_0_total != 0) {
for ($__section_company_name_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] = 0; $__section_company_name_0_iteration <= $__section_company_name_0_total; $__section_company_name_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']++){
?>

<TR>

<TD><?php echo $_smarty_tpl->tpl_vars['company_names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
</TD>
<TD><?php echo $_smarty_tpl->tpl_vars['share_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
</TD>


</TR>
<?php
}
}
if ($__section_company_name_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_company_name'] = $__section_company_name_0_saved;
}
?>


</table>

<table align="right" cellpadding="10" cellspacing="10">
<tr>

 

</tr>








</table>






<div align="center">
<form name="changeshareprice" method="post" action="changeshareprice.php">
  <input type="submit" name="calculate_shareprice" value="CALCULATE SHAREPRICE ">
</form>

</div>



</body>
</html>

<?php }
}
