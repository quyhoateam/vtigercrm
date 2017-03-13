<?php /* Smarty version Smarty-3.1.7, created on 2017-03-10 09:04:20
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Settings\ModuleDesigner\Events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2095758c22684b7cf12-99578826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee3883174846ce16724139f18cd4bcffdd64e5c' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\ModuleDesigner\\Events.tpl',
      1 => 1489134854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2095758c22684b7cf12-99578826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c22684bb7b7',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c22684bb7b7')) {function content_58c22684bb7b7($_smarty_tpl) {?><table id="md-events-table">
<tr>
<td>
<div id="md-events-toolbar">
	<h2><?php echo vtranslate('LBL_EVENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>
	
	<ul id="md-events-list">
	<li><?php echo vtranslate('vtiger.entity.beforesave.modifiable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.beforesave',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.beforesave.final',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.aftersave',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.aftersave.final',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.beforedelete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.afterdelete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.afterrestore',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	</ul>
</div>
</td>
<td>
<div>
<ul id="md-events-ul" class="md-events-ul">
<!-- Events added with JS -->
</ul>
</div>
</td>
</table><?php }} ?>