<?php /* Smarty version Smarty-3.1.7, created on 2017-03-07 10:55:06
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\HelpDesk\DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1045658be918a67ba36-10196129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2108dd729ea973424f45e7395ca4c3827d565b5' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\HelpDesk\\DetailViewHeaderTitle.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045658be918a67ba36-10196129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
    'PRIORITY' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58be918a7678c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be918a7678c')) {function content_58be918a7678c($_smarty_tpl) {?>
<span class="span2"><img src="<?php echo vimage_path('summary_Tickets.png');?>
" class="summaryImg" /></span><span class="span10 margin0px"><span class="row-fluid"><h4 class="recordLabel" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><span class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span>&nbsp;<?php }?><?php } ?></h4></span><?php $_smarty_tpl->tpl_vars['PRIORITY'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('ticketpriorities'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['PRIORITY']->value)){?><span class="row-fluid"><span class="muted"><?php echo vtranslate('Priority',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 - </span><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('ticketpriorities');?>
</span><?php }?></span><?php }} ?>