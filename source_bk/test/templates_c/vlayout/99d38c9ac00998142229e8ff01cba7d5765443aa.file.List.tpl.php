<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 06:47:39
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\HelloWorld\List.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11458c0d744ec1106-96606406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d38c9ac00998142229e8ff01cba7d5765443aa' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\HelloWorld\\List.tpl',
      1 => 1489042055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11458c0d744ec1106-96606406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c0d74501697',
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0d74501697')) {function content_58c0d74501697($_smarty_tpl) {?><h1><?php echo vtranslate('Hello World',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h1>
<h4><?php echo vtranslate('LBL_WELCOME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
<a href="index.php?module=HelloWorld&view=Edit">test Edit</a>
<?php }} ?>