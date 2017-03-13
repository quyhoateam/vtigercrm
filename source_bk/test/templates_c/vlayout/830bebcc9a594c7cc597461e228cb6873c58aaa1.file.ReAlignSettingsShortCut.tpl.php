<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 10:27:51
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\ReAlignSettingsShortCut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3019058c12e27bd17a9-32325220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830bebcc9a594c7cc597461e228cb6873c58aaa1' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\ReAlignSettingsShortCut.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3019058c12e27bd17a9-32325220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS_SHORTCUT' => 0,
    'SETTING_SHORTCUT' => 0,
    'MODULE' => 0,
    'SPAN_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c12e2804025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c12e2804025')) {function content_58c12e2804025($_smarty_tpl) {?>
 <?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable(1, null, 0);?><div  class="row-fluid"><?php  $_smarty_tpl->tpl_vars['SETTING_SHORTCUT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->key => $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value){
$_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->_loop = true;
 $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->iteration++;
 $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->last = $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->iteration === $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['shortcuts']['last'] = $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->last;
?><span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="span3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value->getUrl();?>
"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="margin-right: -2%;margin-top: -5%;" title="Close" type="button" class="unpin close hide">x</button><h5 class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><div><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTING_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></span><?php if ($_smarty_tpl->tpl_vars['SPAN_COUNT']->value==3){?></div><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable(1, null, 0);?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['shortcuts']['last']){?><div class="row-fluid"><?php }?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['SPAN_COUNT']->value+1, null, 0);?><?php } ?></div><?php }} ?>