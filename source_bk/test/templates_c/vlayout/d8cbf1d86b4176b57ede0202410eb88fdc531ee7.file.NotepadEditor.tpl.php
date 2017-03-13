<?php /* Smarty version Smarty-3.1.7, created on 2017-02-10 08:47:24
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\VTENotepad\NotepadEditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23043589d7e1c43bf14-68165462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8cbf1d86b4176b57ede0202410eb88fdc531ee7' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\VTENotepad\\NotepadEditor.tpl',
      1 => 1486716395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23043589d7e1c43bf14-68165462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_589d7e1c49da8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d7e1c49da8')) {function content_589d7e1c49da8($_smarty_tpl) {?>

<div class="pull-right commonActionsButtonContainer"><div class="btn-group dropdown mega-dropdown"><a href="javascript:;" class="dropdown-toggle"><img src="layouts/vlayout/modules/VTENotepad/resources/favicon.png"id="vtiger_vtenotepad-icon" class="alignMiddle"alt="VTENotepad" title="VTENotepad"></a><ul class="dropdown-menu dropdownStyles commonActionsButtonDropDown mega-dropdown-menu"><li id="vtiger_vtenotepad-container"><div class="row-fluid"><div class="span12"><textarea name="" id="vtiger_vtenotepad-content" cols="30" rows="15"data-id="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value ? $_smarty_tpl->tpl_vars['RECORD']->value->getId() : 0;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value ? $_smarty_tpl->tpl_vars['RECORD']->value->get('content') : '';?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp2;?>
</textarea></div></div><div class="row-fluid"><div class="span12"><span class="vtiger_vtenotepad-updated"><span class="vtiger_vtenotepad-updated-label"><?php echo vtranslate('Last saved',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>:&nbsp;<span class="vtiger_vtenotepad-updated-time"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value ? $_smarty_tpl->tpl_vars['RECORD']->value->get('updated') : '';?>
<?php $_tmp3=ob_get_clean();?><?php echo $_tmp3;?>
</span></span><button class="btn btn-success btn-save" type="button"><?php echo vtranslate('Save',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div></li></ul></div></div>
<?php }} ?>