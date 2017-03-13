<?php /* Smarty version Smarty-3.1.7, created on 2017-03-13 04:13:28
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\ModuleBuilder\ModuleBuilderActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054258c61c685d4944-01284654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8d8336d7ff2de668722aef42463bb7e62cfc12' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\ModuleBuilder\\ModuleBuilderActions.tpl',
      1 => 1489378397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1054258c61c685d4944-01284654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c61c685f321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c61c685f321')) {function content_58c61c685f321($_smarty_tpl) {?>

<br /><br /><div align="center" style="color: rgb(153, 153, 153);"><?php echo vtranslate('LBL_FOOTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :: v <?php echo vtranslate('LBL_MODULE_VERSION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br/><a href="<?php echo vtranslate('Order_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="TECHNOKRAFTS"><?php echo vtranslate('COPYRIGHT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><br/><?php echo vtranslate('LBL_COUNTRY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br/><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_donations"><input type="hidden" name="business" value="paypal@technokrafts.net"><input type="hidden" name="lc" value="US"><input type="hidden" name="item_name" value="Donation for Module Builder"><input type="hidden" name="item_number" value="001"><input type="hidden" name="no_note" value="0"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest"><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></form></div><br /><br /><?php }} ?>