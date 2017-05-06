<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:36:12
  from "C:\xampp\htdocs\SM\smarty\templates\share_normal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c397ccc1105_52056280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f617d5d35cb4ca8673f4ab100fc39dda9acd61a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\share_normal.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c397ccc1105_52056280 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>VSM CLIENT : NORMAL TRADING</title>
<link href="smarty/templates/styles/1.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #000080}
-->
</style>
</head>
<BODY>
<div align = "center">
  <h3 class="style1">Normal Trading </h3>
  <h3 class="style2"><B>Customer ID :   </B><?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
</h3>
</div>
<form name="share_form" method="POST" action="share_normal.php">

<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
">
<table cellpadding="15" cellspacing="15" align="center" >

<TR>
	<TH>Sector Name</TH>
  <TH>Company Name</TH>
  <TH>Share Price</TH>
  <TH>Shares Held</TH>
  <TH colspan="2">Transaction Type</TH>
  <TH>No. Of Shares</TH>
  
</TR>

<?php
$__section_companies_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_companies']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies'] : false;
$__section_companies_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['company_names']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_companies_0_total = $__section_companies_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_companies'] = new Smarty_Variable(array());
if ($__section_companies_0_total != 0) {
for ($__section_companies_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] = 0; $__section_companies_0_iteration <= $__section_companies_0_total; $__section_companies_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']++){
?>

<TR>
<TD><?php echo $_smarty_tpl->tpl_vars['sector_names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
</TD>
<TD><?php echo $_smarty_tpl->tpl_vars['company_names']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
</TD>
<TD><?php echo $_smarty_tpl->tpl_vars['share_prices']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
</TD>
<TD><?php echo $_smarty_tpl->tpl_vars['shares_held']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
</TD>
<TD><input type="radio" name=<?php echo $_smarty_tpl->tpl_vars['company_ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
_transaction_type value="buy">Buy</TD>
    <TD><input type="radio" name=<?php echo $_smarty_tpl->tpl_vars['company_ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
_transaction_type value="sell">Sell</TD>
<TD><input type="text" name=<?php echo $_smarty_tpl->tpl_vars['company_ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_companies']->value['index'] : null)];?>
_no_of_shares value="0"></TD>


</TR>
<?php
}
}
if ($__section_companies_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_companies'] = $__section_companies_0_saved;
}
?>

<TR><TD colspan="5" align="right"><b>Current Balance:</b></TD><td>Rs. <?php echo $_smarty_tpl->tpl_vars['current_balance']->value;?>
</td></TR>


<tr><TD colspan="6" align="right"><input type="submit" name="share_transaction" value="Go >>"></TD></tr>


</table>

</form>


</TD>







</body>
</html>

<?php }
}
