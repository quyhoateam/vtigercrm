<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 03:42:58
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\MyRss\SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1770758c0cd786cc276-70897214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b48dbacdcb2aa080b946f1b0b2bee8ef4f010b' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\MyRss\\SideBar.tpl',
      1 => 1489030970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770758c0cd786cc276-70897214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c0cd787830e',
  'variables' => 
  array (
    'FEEDS' => 0,
    'FEED' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0cd787830e')) {function content_58c0cd787830e($_smarty_tpl) {?><div class="quickWidgetContainer">
        <div class="quickWidget">
                <div class="quickWidgetHeader">
                        <h5 class="pull-left">Your RSS Feeds</h5>
                        <button class="btn pull-right" id="RssFeedAdd">+</button>
                        <div class="clearfix"></div>
                </div>
                <div class="widgetContainer collapse in">
                        <div class="row-fluid">
                                <div class="span10">
                                        <ul class="nav nav-list">
                                                <?php  $_smarty_tpl->tpl_vars['FEED'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FEED']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FEEDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FEED']->key => $_smarty_tpl->tpl_vars['FEED']->value){
$_smarty_tpl->tpl_vars['FEED']->_loop = true;
?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FEED']->value->get('url');?>
"
                                                    data-feedurl="<?php echo $_smarty_tpl->tpl_vars['FEED']->value->get('url');?>
">
                                                     <?php echo $_smarty_tpl->tpl_vars['FEED']->value->get('title');?>
</a>
                                                </li>
                                                <?php } ?>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
</div><?php }} ?>