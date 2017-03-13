<?php /* Smarty version Smarty-3.1.7, created on 2017-03-13 04:13:28
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\ModuleBuilder\ModuleBuilderView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957158c61c6827d6d3-18194780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9215c39d8a4c92c82a6357debf74cdcf5ff12d85' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\ModuleBuilder\\ModuleBuilderView.tpl',
      1 => 1489378397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957158c61c6827d6d3-18194780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c61c6828edc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c61c6828edc')) {function content_58c61c6828edc($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleBuilderBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleBuilderActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>