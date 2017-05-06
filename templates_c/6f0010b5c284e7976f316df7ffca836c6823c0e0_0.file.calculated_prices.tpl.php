<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:46:47
  from "C:\xampp\htdocs\SM\smarty\templates\calculated_prices.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3bf7ce57d9_11122894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0010b5c284e7976f316df7ffca836c6823c0e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\calculated_prices.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3bf7ce57d9_11122894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<link href="smarty/templates/styles/3.css" rel="stylesheet" type="text/css">

</head>
<h2>PROJECTED PRICES </h2>
<form id="form1" name="form1" method="post" action="">
<table width="776" height="93" border="1">
  <tr>
    <th width="179" scope="col">Company Name </th>
    <th width="126" scope="col">Total Shares at last shareprice </th>
    <th width="147" scope="col">Current Total Shares </th>
    <th width="134" scope="col">Current Share Price </th>
    <th width="156" scope="col">Projected Share Price </th>
  </tr>

<?php
$__section_company_name_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name'] : false;
$__section_company_name_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['company_names']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_company_name_0_total = $__section_company_name_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_company_name'] = new Smarty_Variable(array());
if ($__section_company_name_0_total != 0) {
for ($__section_company_name_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] = 0; $__section_company_name_0_iteration <= $__section_company_name_0_total; $__section_company_name_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']++){
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['company_names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['total_shares_at_last_shareprice']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['current_total_shares']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['share_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
</td>
    <td>
      <input type="text" name= "<?php echo $_smarty_tpl->tpl_vars['company_id']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
" value = "<?php echo $_smarty_tpl->tpl_vars['projected_shareprice']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_company_name']->value['index'] : null)];?>
" />
    
    </td>
  </tr>
<?php
}
}
if ($__section_company_name_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_company_name'] = $__section_company_name_0_saved;
}
?>  
</table>
<div align="right">
  
  
  <p><input type="submit" name="change_prices" value="Confirm the above Changed Prices" /></p>
  
</div>
</form>
<p>
  <label>
  
  </label>
</p>
</html><?php }
}
