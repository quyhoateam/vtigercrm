<?php /* Smarty version Smarty-3.1.7, created on 2017-03-13 04:49:42
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Rss\SideBarLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:719658c624e67e6c43-70479006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '190237eaa2f7bb22469d652f58d658e139789a7c' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Rss\\SideBarLinks.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '719658c624e67e6c43-70479006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUICK_LINKS' => 0,
    'SIDEBARLINK' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c624e689c7e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c624e689c7e')) {function content_58c624e689c7e($_smarty_tpl) {?>
<div class="quickLinksDiv"><?php $_smarty_tpl->tpl_vars['SIDEBARLINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'][0], null, 0);?><div style="margin-bottom: 5px" class="btn-group row-fluid"><button id="rssAddButton" class="btn addButton span12 rssAddButton" data-href="<?php echo $_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getUrl();?>
"><img src="layouts/vlayout/skins/images/rss_add.png" /><strong>&nbsp;&nbsp; <?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARLINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="rssAddFormContainer hide"></div></div><?php }} ?>