<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 08:35:57
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/i386\modules\Vtiger\ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752258c113ed7f4f46-40680061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef62238b1c44e37338e231977a8c93c6f82d6e65' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/i386\\modules\\Vtiger\\ListViewContents.tpl',
      1 => 1489048482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752258c113ed7f4f46-40680061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CUSTOM_VIEWS' => 0,
    '_CUSTOMVIEWS' => 0,
    'VIEWID' => 0,
    '_CUSTOMVIEW' => 0,
    'LISTVIEW_ENTRIES' => 0,
    '_E' => 0,
    'LISTVIEW_HEADERS' => 0,
    '_H' => 0,
    '_F' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c113ed8441e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c113ed8441e')) {function content_58c113ed8441e($_smarty_tpl) {?>
<div class="container">

	<div class="row-fluid">
	
		<div class="span3">
			<?php  $_smarty_tpl->tpl_vars['_CUSTOMVIEWS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_CUSTOMVIEWS']->_loop = false;
 $_smarty_tpl->tpl_vars['_CUSTOMVIEWGROUP'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_CUSTOMVIEWS']->key => $_smarty_tpl->tpl_vars['_CUSTOMVIEWS']->value){
$_smarty_tpl->tpl_vars['_CUSTOMVIEWS']->_loop = true;
 $_smarty_tpl->tpl_vars['_CUSTOMVIEWGROUP']->value = $_smarty_tpl->tpl_vars['_CUSTOMVIEWS']->key;
?>
			<ul class="nav nav-list">
				<?php  $_smarty_tpl->tpl_vars['_CUSTOMVIEW'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_CUSTOMVIEW']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_CUSTOMVIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_CUSTOMVIEW']->key => $_smarty_tpl->tpl_vars['_CUSTOMVIEW']->value){
$_smarty_tpl->tpl_vars['_CUSTOMVIEW']->_loop = true;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['VIEWID']->value==$_smarty_tpl->tpl_vars['_CUSTOMVIEW']->value->getId()){?>class="active"<?php }?>><a href="#"><?php echo $_smarty_tpl->tpl_vars['_CUSTOMVIEW']->value->get('viewname');?>
</a></li>
				<?php } ?>
			</ul>
			<?php } ?>
		</div>
		<div class="span9">
		
			<?php  $_smarty_tpl->tpl_vars['_E'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_E']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_E']->key => $_smarty_tpl->tpl_vars['_E']->value){
$_smarty_tpl->tpl_vars['_E']->_loop = true;
?>
			<div>
				<h3>#<?php echo $_smarty_tpl->tpl_vars['_E']->value->getId();?>
</h3>
				<table class="table table-bordered-outline">
					<?php  $_smarty_tpl->tpl_vars['_H'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_H']->_loop = false;
 $_smarty_tpl->tpl_vars['_F'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_H']->key => $_smarty_tpl->tpl_vars['_H']->value){
$_smarty_tpl->tpl_vars['_H']->_loop = true;
 $_smarty_tpl->tpl_vars['_F']->value = $_smarty_tpl->tpl_vars['_H']->key;
?>
					<tr>
						<td nowrap=""><?php echo $_smarty_tpl->tpl_vars['_H']->value->get('label');?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['_E']->value->get($_smarty_tpl->tpl_vars['_F']->value);?>
</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<?php } ?>
			
		</div>
	</div>
</div>



<?php }} ?>