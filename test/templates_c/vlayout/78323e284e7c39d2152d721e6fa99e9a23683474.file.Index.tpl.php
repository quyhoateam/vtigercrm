<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 03:42:58
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\MyRss\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1575258c0cd78792591-59651580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78323e284e7c39d2152d721e6fa99e9a23683474' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\MyRss\\Index.tpl',
      1 => 1489030970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1575258c0cd78792591-59651580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c0cd78796ff',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0cd78796ff')) {function content_58c0cd78796ff($_smarty_tpl) {?><div class="listViewPageDiv">
        <div class="listViewTopMenuDiv">
                <div class="listViewActionsDiv">
                        <div id="RssFeedTitle">
                             Learn more about RSS
                             <a href="http://en.wikipedia.org/wiki/RSS" target="_blank">here</a>.
                        </div>
                </div>
        </div>
        <div id="RssFeedContainer" class="listViewEntriesDiv">
                &leftarrow; Selected feed content will be displayed here.
        </div>
</div>
<div id="RssFeedAddFormTpl" style="display: none;">
        <div class="modelContainer">
                <form method="GET" action="javascript:;" class="RssFeedAddForm">
                        <div class="modal-header">
                                <a class="close" data-dismiss="modal">x</a>
                                <h3>New RSS Feed</h3>
                        </div>
                        <div class="modal-body">
                                RSS Feed: <input type="text" name="url" class="validate[required]">
                        </div>
                        <div class="modal-footer">
                                <a class="cancelLink cancelLinkContainer pull-right" data-dismiss="modal">
                                 <?php echo vtranslate('LBL_CANCEL');?>
</a>
                                <button class="btn btn-success" type="submit">Add</button>
                        </div>
                </form>
        </div>
</div><?php }} ?>