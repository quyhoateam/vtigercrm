<?php /* Smarty version Smarty-3.1.7, created on 2017-03-10 04:07:32
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Settings\ModuleDesigner\BlocksFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787858c22684a622a2-85935192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9f87f8e5cd4233636a6e49ee6a112af46311c8' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\ModuleDesigner\\BlocksFields.tpl',
      1 => 1489118841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787858c22684a622a2-85935192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c22684a81e9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c22684a81e9')) {function content_58c22684a81e9($_smarty_tpl) {?><table id="md-block-fields">
<tr>
<td>
<div id="md-fields-toolbar">
	<h2><?php echo vtranslate('LBL_UITYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>
	<ul id="md-fields-list" class="droptrue">
	<!-- Fields list generated with JS -->
	</ul>
</div>
</td>
<td>

<div id="md-add-block-btn">
	<img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/block.png" alt="<?php echo vtranslate('LBL_ADD_BLOCK_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/> <a href="#" onclick="md_addBlock(); return false;"><?php echo vtranslate('LBL_ADD_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
</div>

<div>
<ul id="md-blocks-ul">
<!-- Blocks added with JS -->
</ul>
</div>
</td>
</table><?php }} ?>