<?php /* Smarty version Smarty-3.1.7, created on 2017-03-13 04:16:14
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Vtiger\EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064058c61d0eb34538-18924349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3f04a5e4513c2ab8b302eb2acd54bd63fa0c79' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\EditViewActions.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064058c61d0eb34538-18924349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c61d0eb42f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c61d0eb42f6')) {function content_58c61d0eb42f6($_smarty_tpl) {?>

<div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div><br></form></div><?php }} ?>