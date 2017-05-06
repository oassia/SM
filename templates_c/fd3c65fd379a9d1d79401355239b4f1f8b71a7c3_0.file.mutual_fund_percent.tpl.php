<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:46:54
  from "C:\xampp\htdocs\SM\smarty\templates\mutual_fund_percent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3bfed20d17_15176491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3c65fd379a9d1d79401355239b4f1f8b71a7c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\mutual_fund_percent.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3bfed20d17_15176491 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
<link href="smarty/templates/styles/3.css" rel="stylesheet" type="text/css">

</head>
<h3>Update Mutual Fund Balance</h3>
<p> ...<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 ... </p>
<form name = "form1" method = "post" action = "update_mutual_fund.php" >
<p>Percentage Change in SharePrice : <input type = "text" name = "percent" value = "<?php echo $_smarty_tpl->tpl_vars['mutual_percent']->value;?>
" /></p>
  <p><input type = "checkbox" name = "checkbox_update_mutual_fund" checked />Apply the above percentage change to mutual fund balance of all customers</p>
  <p>
    <input type="submit" name="update_mutual_fund" value="Go" />
  </p>
</form> 
  <?php }
}
