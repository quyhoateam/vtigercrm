<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 08:25:54
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Portal\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240758c11192efe266-18939553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38050831b644c0e2f27b59d002feb188e00c3375' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Portal\\EditView.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240758c11192efe266-18939553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE' => 0,
    'BOOKMARK_NAME' => 0,
    'BOOKMARK_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c11193058ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c11193058ae')) {function content_58c11193058ae($_smarty_tpl) {?>
<div class='modelContainer'><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php if ($_smarty_tpl->tpl_vars['RECORD']->value){?><?php echo vtranslate('LBL_EDIT_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_ADD_NEW_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></h3></div><form class="form-horizontal" id="saveBookmark" method="post" action="index.php"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><div class="modal-body tabbable"><div class="control-label"><label><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_BOOKMARK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="controls"><input type="text" name="bookmarkName" id="bookmarkName"<?php if ($_smarty_tpl->tpl_vars['RECORD']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['BOOKMARK_NAME']->value;?>
" <?php }?> placeholder="<?php echo vtranslate('LBL_ENTER_BOOKMARK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" /></div><br><div class="control-label"><label><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_BOOKMARK_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="controls"><input type="text" name="bookmarkUrl" id="bookmarkUrl"<?php if ($_smarty_tpl->tpl_vars['RECORD']->value){?> value="<?php echo $_smarty_tpl->tpl_vars['BOOKMARK_URL']->value;?>
" <?php }?> placeholder="<?php echo vtranslate('LBL_ENTER_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" /></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>