<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:09:58
  from "C:\xampp\htdocs\SM\smarty\templates\mutualfund.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c3356395a16_85793843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae620c27805a3a59b04ae71858a4a134161162db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SM\\smarty\\templates\\mutualfund.tpl',
      1 => 1420438444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c3356395a16_85793843 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<title>VSM MUTUAL FUND</title>
<link href="smarty/templates/styles/1.css" rel="stylesheet" type="text/css">

</head>
<BODY>

<BR><BR>
<h3 align="center">MUTUAL FUND</h3>


<form name="select_mutualfund_amount" method="post" action="mutualfund.php">

<div style="margin-left:30%; margin-right:30%; margin-top:10%">

<table cellpadding="5" cellspacing="5">

<tr>

 <TD>Customer id </TD>
 <td align="left"  type="text" name="customer_id" value=><?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>

</td>

</tr>
<TR>

<TD><input type="radio" name="flag" value="invest" checked>Invest in Mutual Fund  </TD>
   
 <TD><input type="radio" name="flag" value="withdraw">Withdraw from Mutual Fund</TD>


</TR>






<TR>

<TR>

 <TD>Enter Amount  </TD>
 <td align="left"><input type="text" name="amount" value=""></td>

</TR>

<tr>

 <TD>Current Balance Rs</TD>
 <td align="left" name="current_balance " value=><?php echo $_smarty_tpl->tpl_vars['current_balance']->value;?>

     
      </td>

</tr>
<tr>

 <TD>Mutual Fund Balance Rs</TD>
 <td align="left" name="mutual_fund_balance " value=><?php echo $_smarty_tpl->tpl_vars['mutual_fund_balance']->value;?>

     
      </td>

</tr>
<tr>

<TD colspan="2" align="center">
<input type="submit" name="submit" value="ok ">
</TD>

</tr>

</table>





</div>
<input type="hidden" name="customer_id" value=<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
/>
</form>


</div>
<input type="hidden" name="current_balance" value=<?php echo $_smarty_tpl->tpl_vars['current_balance']->value;?>
/>
</form>



</body>
</html>

<?php }
}
