<?php /* Smarty version Smarty-3.1.7, created on 2017-03-07 01:49:53
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Settings\Picklist\PickListValueByRole.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1448158be11c158b5a4-51227484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de492b98454e8c7884f065935c634e8d7f951580' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Picklist\\PickListValueByRole.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448158be11c158b5a4-51227484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ALL_PICKLIST_VALUES' => 0,
    'PICKLIST_VALUE' => 0,
    'PICKLIST_KEY' => 0,
    'ROLE_PICKLIST_VALUES' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58be11c160da5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be11c160da5')) {function content_58be11c160da5($_smarty_tpl) {?>
<br><br><div class="row-fluid"><div class="span2">&nbsp;</div><div class="span3" style="overflow: hidden"><div id="assignToRolepickListValuesTable" class="row-fluid fontBold textAlignCenter"><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><div data-value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" style="border: 1px solid #adadad;padding: 4%;overflow: hidden;text-overflow: ellipsis;" class="cursorPointer assignToRolePickListValue <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['ROLE_PICKLIST_VALUES']->value)){?>selectedCell<?php }else{ ?>unselectedCell<?php }?>"><?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['ROLE_PICKLIST_VALUES']->value)){?><i class="icon-ok pull-left"></i><?php }?><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</div><?php } ?></div></div><div class="span6"><div><i class="icon-info-sign"></i>&nbsp;&nbsp;<span class="selectedCell padding1per"><?php echo vtranslate('LBL_SELECTED_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;<span><?php echo vtranslate('LBL_SELECTED_VALUES_MESSGAE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><br><div><i class="icon-info-sign"></i>&nbsp;&nbsp;<span><?php echo vtranslate('LBL_ENABLE/DISABLE_MESSGAE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><br>&nbsp;&nbsp;<button id="saveOrder" disabled="" class="btn btn-success"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div>	<?php }} ?>