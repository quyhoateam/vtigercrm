<?php /* Smarty version Smarty-3.1.7, created on 2017-03-13 04:49:50
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Rss\RssAddForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2177558c624eebd0403-85432369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32d89122efe051b1e09a8cd21709f9b313a78fe2' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Rss\\RssAddForm.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2177558c624eebd0403-85432369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c624eecdc3f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c624eecdc3f')) {function content_58c624eecdc3f($_smarty_tpl) {?>
<div id="rssAddFormUi" class='modelContainer'><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3><?php echo vtranslate('LBL_ADD_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="rssAddForm"  method="post" action="index.php" ><div class="modal-body tabbable"><div class="control-group"><div class="control-label" style="width: 50;"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="controls"><input class="input-xxlarge" type="text" id="feedurl" name="feedurl" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-validator='[ { "name":"Url" } ]' placeholder="<?php echo vtranslate('LBL_ENTER_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" /></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>
<?php }} ?>