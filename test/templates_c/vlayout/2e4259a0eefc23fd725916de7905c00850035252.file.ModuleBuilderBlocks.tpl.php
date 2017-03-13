<?php /* Smarty version Smarty-3.1.7, created on 2017-03-13 04:13:28
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\ModuleBuilder\ModuleBuilderBlocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1822458c61c682f9fb7-10410869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e4259a0eefc23fd725916de7905c00850035252' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\ModuleBuilder\\ModuleBuilderBlocks.tpl',
      1 => 1489378397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822458c61c682f9fb7-10410869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_MODEL' => 0,
    'MODULE' => 0,
    'NOOFBLOCK' => 0,
    'TOKEN' => 0,
    'SINGLE_MODULE_NAME' => 0,
    'UNINSTALLURL' => 0,
    'TKS_PARENT_MODULE' => 0,
    'PARENTTAB' => 0,
    'TKS_ENTITY' => 0,
    'k' => 0,
    'v' => 0,
    'SELECTED_MODULE_MODEL' => 0,
    'RELATED_LIST' => 0,
    'i' => 0,
    'moduletks' => 0,
    'ADD_SUPPORTED_FIELD_TYPES' => 0,
    'FIELD_TYPE' => 0,
    'FIELD_TYPE_INFO' => 0,
    'TYPE_INFO' => 0,
    'TYPE_INFO_VALUE' => 0,
    'CLEARCACHEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c61c6852e67',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c61c6852e67')) {function content_58c61c6852e67($_smarty_tpl) {?>
<div class='container-fluid editViewContainer' id='editViewContainer'><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="Save" /><input type="hidden" id="noofblocks" name="noofblocks" value="<?php echo $_smarty_tpl->tpl_vars['NOOFBLOCK']->value;?>
" /><form class="tks_modulevalidate" id="tks_modulevalidate"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="BuildModule" /><input type="hidden" name="mode" value="saveModule" /><input type="hidden" id="noofblocks" name="noofblocks" value="<?php echo $_smarty_tpl->tpl_vars['NOOFBLOCK']->value;?>
" /><input type="hidden" id="tkssequence" name="tkssequence" value="" /><input type="hidden" id="token" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" /><div class="contentHeader row-fluid"><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME'] = new Smarty_variable(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><h3 class="span8 textOverflowEllipsis"><table><tr><td><img src="modules/ModuleBuilder/images/ModuleBuilderBig.png" alt="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" height="48" width="48"/></td><td><?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td></tr></table></h3><!--class="span8 textOverflowEllipsis"--><span class="pull-right"><button class="btn btn-success" type="button" id="nextStep"data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo vtranslate('LBL_CLICK_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="icon-step-forward"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;<button class="btn btn-success hide" type="submit" id="saveModule"data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo vtranslate('LBL_CLICK_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="icon-download-alt"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;<button class="btn btn-success hide download" type="button" id="download"data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo vtranslate('LBL_CLICK_DOWNLOAD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="icon-download"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_DOWNLOAD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:location.reload();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span><!--class="pull-right"--><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('is_admin')=='on'){?><span class="btn-group pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-wrench" alt="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu"><li><a href='<?php echo $_smarty_tpl->tpl_vars['UNINSTALLURL']->value;?>
'><?php echo vtranslate('LBL_UNINSTALL_MODULE_BUILDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li></ul></span><?php }?></div><!--class="contentHeader row-fluid"--><table class="table table-bordered blockContainer showInlineTable equalSplit"><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"> <span class="redColor">*</span> <?php echo vtranslate('MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="span6 fieldValue"><input id="tks_modulename" type="text" name="tks_modulename" value="" style="width: 305px;"data-validation-engine="validate[required] funcCall[Vtiger_OnlyAphabets_Validator_Js.invokeValidation]]" />&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body"data-toggle="popover" data-placement="top" data-content="<?php echo vtranslate('LBL_ENTER_MODULENAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></i></div><!--class="span6 fieldValue"--></td><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"> <span class="redColor">*</span> <?php echo vtranslate('MODULE_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="span6 fieldValue"><input id="tks_modulelabel" type="text" name="tks_modulelabel" value="" style="width: 305px;"data-validation-engine="validate[required] funcCall[Vtiger_OnlyAphabetsWithSapce_Validator_Js.invokeValidation]]"/>&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body" data-toggle="popover" data-placement="top"data-content="<?php echo vtranslate('LBL_ENTER_MODULELABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></i></div><!--class="span6 fieldValue"--></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"> <span class="redColor">*</span> <?php echo vtranslate('PARENT_TAB_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="span6 fieldValue"><select class="chzn-select" name="tks_parent" id="tks_parent" style="width: 314px" ><?php  $_smarty_tpl->tpl_vars["PARENTTAB"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["PARENTTAB"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TKS_PARENT_MODULE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["PARENTTAB"]->key => $_smarty_tpl->tpl_vars["PARENTTAB"]->value){
$_smarty_tpl->tpl_vars["PARENTTAB"]->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PARENTTAB']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['PARENTTAB']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select>&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body" data-toggle="popover"data-placement="top" data-content="<?php echo vtranslate('SELECT_PARENT_TAB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></div><!--class="span6 fieldValue"--></td><td class="fieldLabel medium"><span class = 'hide entityField'><label class="muted pull-right marginRight10px"><?php echo vtranslate('ENTITY_IDENTIFIER_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span></td><td class="fieldValue medium tks_entity_div"><div class="span6 fieldValue entityField hide"><select class="chzn-select" name="tks_entity" id="tks_entity" style="width: 314px"><option value="" selected="selected"><?php echo vtranslate('SELECT_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TKS_ENTITY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?></select>&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body" data-toggle="popover"data-placement="bottom" data-content="<?php echo vtranslate('SELECT_ENTITY_IDENTIFIER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></div><!--class="span6 fieldValue"--></td></tr></table><!--class="table table-bordered blockContainer showInlineTable"--></form><!--class="tks_modulevalidate" id="tks_modulevalidate"--><br><hr><div class="container-fluid hide" id="layoutEditorContainer"><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="active" data-container="body" data-toggle="popover" data-placement="right" data-content="<?php echo vtranslate('LBL_MODULE_FIELDS_LAYOUT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><a data-toggle="tab" href="#detailViewLayout"><strong><?php echo vtranslate('LBL_DETAILVIEW_LAYOUT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="relatedListTab" data-container="body" data-toggle="popover" data-placement="right" data-content="<?php echo vtranslate('LBL_MODULE_RELATED_TAB',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><a data-toggle="tab" href="#relatedTabOrder"><strong><?php echo vtranslate('LBL_ARRANGE_RELATED_TABS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li></ul><!--class="nav nav-tabs layoutTabs massEditTabs"--><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="detailViewLayout"><?php $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getAddFieldTypeInfo(), null, 0);?><div class="btn-toolbar padding20"><button class="btn addButton addCustomBlock" type="button"data-container="body" data-toggle="popover" data-placement="right" data-content="<?php echo vtranslate('LBL_ADD_NEW_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><span class="pull-right"><button class="btn btn-success saveFieldSequence hide" type="button"data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo vtranslate('LBL_SAVE_SEQUENCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="icon-align-justify"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span></div><!--class="btn-toolbar padding20"--><div id="moduleBlocks"><div class="tksfirstblock" ></div></div>	<!--id="moduleBlocks"--></div><!--class="tab-pane active" id="detailViewLayout"--><div class="tab-pane" id="relatedTabOrder"><div class="relatedTabModulesList"><table class="table table-bordered blockContainer showInlineTable relatedlists"><tr><th class="blockHeader">&nbsp;</th><th class="blockHeader"><?php echo vtranslate('MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th class="blockHeader"><?php echo vtranslate('SELECT_ACTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body" data-toggle="popover"data-placement="bottom" data-content="<?php echo vtranslate('LBL_SELECT_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></th><th class="blockHeader"><?php echo vtranslate('ADD_ACTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body" data-toggle="popover"data-placement="bottom" data-content="<?php echo vtranslate('LBL_ADD_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></th></tr><input type="hidden" name="tks_related_mod_cnt" value="<?php echo count($_smarty_tpl->tpl_vars['RELATED_LIST']->value);?>
"  /><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php $_smarty_tpl->tpl_vars['moduletks'] = new Smarty_variable(getTranslatedString($_smarty_tpl->tpl_vars['k']->value,'$MODULE'), null, 0);?><tr class="relblock"><td><input type="checkbox" tabindex="" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="relcheck" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"/></td><td><?php echo $_smarty_tpl->tpl_vars['moduletks']->value;?>
<?php if ($_smarty_tpl->tpl_vars['k']->value=='Leads'){?>&nbsp;&nbsp;<i class="icon-info-sign alignMiddle" data-container="body" data-toggle="popover"data-placement="bottom" data-content="<?php echo vtranslate('LBL_LEAD_WARNING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i><?php }?></td><td><input type="checkbox" tabindex="" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_sel" disabled="disabled" class="small relsel"></td><td><input type="checkbox" tabindex="" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
_add"  disabled="disabled" class="small reladd"></td></tr><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?><?php } ?></table><!--class="table table-bordered blockContainer showInlineTable relatedlists"--></div><!--class="relatedTabModulesList"--></div><!--class="tab-pane" id="relatedTabOrder"--></div><!--class="tab-content layoutContent padding20 themeTableColor overflowVisible"--><!--new field START--><li class="newCustomFieldCopy hide"><div class="marginLeftZero border1px" data-field-id="" data-sequence=""><div class="row-fluid padding1per"><span class="span1">&nbsp;<a><img src="<?php echo vimage_path('drag.png');?>
" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></a></span><!--class="span1"--><div class="span11 marginLeftZero" style="word-wrap: break-word;"><span class="fieldLabels"></span><span class="btn-group pull-right actions"><a href="javascript:void(0)" class="dropdown-toggle editFieldDetails" data-toggle="dropdown"><i class="icon-pencil alignMiddle" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></a><!--class="dropdown-toggle editFieldDetails"--><a href="javascript:void(0)" class="deleteCustomField" data-field-id=""><i class="icon-trash alignMiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></a><!--class="deleteCustomField" --><div class="basicFieldOperations hide pull-right" style="width: 250px;"><form class="form-horizontal fieldDetailsForm"><div class="modal-header contentsBackground"><div class="pull-right"><a href="javascript:void(0)" class="cancel">X</a></div></div><!--class="modal-header contentsBackground"--><div style="padding-bottom: 5px;"><span><input type="hidden" name="mandatory" value="O" /><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="mandatory" value="M" />&nbsp;<?php echo vtranslate('LBL_MANDATORY_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span><span><input type="hidden" name="presence" value="1" /><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="presence" value="2" readonly="readonly" />&nbsp;<?php echo vtranslate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span><span><input type="hidden" name="quickcreate" value="1" /><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="quickcreate" value="0" />&nbsp;<?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span><span><input type="hidden" name="summaryfield" value="0"/><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="summaryfield" value="1" />&nbsp;<?php echo vtranslate('LBL_SUMMARY_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span><span><input type="hidden" name="masseditable" value="2" /><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="masseditable" value="1" />&nbsp;<?php echo vtranslate('LBL_MASS_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span><span><input type="hidden" name="tksfilterfield" value="0" /><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="tksfilterfield" value="1" />&nbsp;<?php echo vtranslate('LBL_TKS_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span><span><input type="hidden" name="defaultvalue" value="" /><label class="checkbox" style="padding-left: 25px; padding-top: 5px;"><input type="checkbox" name="defaultvalue" value="1" />&nbsp;<?php echo vtranslate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="padding1per defaultValueUi" style="padding : 0px 10px 0px 25px;"></div></span></div><div class="modal-footer"><span class="pull-right"><div class="pull-right"><a href="javascript:void(0)" style="margin: 5px;color:#AA3434;margin-top:10px;" class="cancel"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success saveFieldDetails" data-field-id="" type="submit"><i class="icon-download-alt"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span></div><!--class="modal-footer"--></form><!--class="form-horizontal fieldDetailsForm"--></div><!--class="basicFieldOperations hide pull-right"--></span><!--class="btn-group pull-right actions"--></div><!--class="span11 marginLeftZero"--></div><!--class="row-fluid padding1per"--></div><!--class="marginLeftZero border1px"--></li><!--class="newCustomFieldCopy hide"--><!--new field END--><!--add NEW BLOCK pop up START--><div class="modal createFieldModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_CREATE_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><!--class="modal-header contentsBackground"--><form class="form-horizontal createCustomFieldForm"><div class="modal-body"><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_SELECT_FIELD_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><span class="row-fluid"><select class="fieldTypesList span7" name="fieldType"><?php  $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ADD_SUPPORTED_FIELD_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->key => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value){
$_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
"<?php  $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['TYPE_INFO'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value[$_smarty_tpl->tpl_vars['FIELD_TYPE']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->key => $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value){
$_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['TYPE_INFO']->value = $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value;?>
"<?php } ?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_TYPE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span><!--class="row-fluid"--></div><!--class="controls"--></div><!--class="control-group"--><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><input type="text" maxlength="50" name="fieldLabel" value="" data-validation-engine="validate[required] funcCall[Vtiger_OnlyAphabetsWithSapce_Validator_Js.invokeValidation]]" /></div><!--class="controls"--></div><!--class="control-group"--><div class="control-group supportedType lengthsupported"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LENGTH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><input type="text" name="fieldLength" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div><!--class="controls"--></div><!--class="control-group supportedType lengthsupported"--><div class="control-group supportedType decimalsupported hide"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_DECIMALS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><input type="text" name="decimal" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div><!--class="controls"--></div><!--class="control-group supportedType decimalsupported hide"--><div class="control-group tksrelatedModules hide"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><span class="row-fluid"><select multiple name="relate" style="width:73%"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['k']->value);?>
</option><?php } ?></select></span><!--class="row-fluid"--></div><!--class="controls"--></div><!--class="control-group tksrelatedModules hide"--><div class="control-group supportedType preDefinedValueExists hide"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><div class="row-fluid"><input type="hidden" id="picklistUi" class="span7 select2" name="pickListValues"placeholder="<?php echo vtranslate('LBL_ENTER_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'PicklistFieldValues')));?>
 /></div><!--class="row-fluid"--></div><!--class="controls"--></div><!--class="control-group supportedType preDefinedValueExists hide"--><div class="control-group isMandatoryField"><span class="control-label">&nbsp;</span><!--class="control-label"--><div class="controls"><label class="checkbox"><input type="checkbox" class="checkbox" name="isMandatory" value="1" >&nbsp;<?php echo vtranslate('LBL_TKS_MANDATORY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><!--class="controls"--></div><!--class="control-group isMandatoryField"--><div class="control-group isfilterfield"><span class="control-label">&nbsp;</span><!--class="control-label"--><div class="controls"><label class="checkbox isFilter"><input type="checkbox" class="checkbox isFilter" name="isFilter" value="1" >&nbsp;<?php echo vtranslate('LBL_TKS_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><!--class="controls"--></div><!--class="control-group isfilterfield"--><div class="control-group supportedType picklistOption hide"><span class="control-label">&nbsp;</span><!--class="control-label"--></div><!--class="control-group supportedType picklistOption hide"--></div><!--class="modal-body"--><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><!--class="form-horizontal createCustomFieldForm"--></div><!--class="modal createFieldModal hide"--><!--add NEW BLOCK pop up END--><!--add BLOCK pop up START--><div class="modal addBlockModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><!--class="modal-header contentsBackground"--><form class="form-horizontal addCustomBlockForm"><div class="modal-body"><div class="control-group"><span class="control-label"><span class="redColor">*</span><span><?php echo vtranslate('LBL_BLOCK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span><!--class="control-label"--><div class="controls"><input type="text" name="label" class="span3"data-validation-engine="validate[required] funcCall[Vtiger_OnlyAphabetsWithSapce_Validator_Js.invokeValidation]]" /></div><!--class="controls"--></div><!--class="control-group"--><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_ADD_AFTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><!--class="control-label"--><div class="controls"><span class="row-fluid"><select class="span8" name="beforeBlockId"><option value="0"><?php echo vtranslate('SELECT_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></span><!--class="row-fluid"--></div><!--class="controls"--></div><!--class="control-group"--></div><!--class="modal-body"--><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><!--class="form-horizontal addCustomBlockForm"--></div><!--class="modal addBlockModal hide"--><!--add BLOCK pop up END--><!--NEW BLOCK DIV START--><div class="newCustomBlockCopy hide marginBottom10px border1px blockSortable" data-block-id="" data-sequence=""style="border-radius: 4px 4px 0px 0px;background: white;"><input type = 'hidden' name = 'tksblockid' value ='0' id = 'tksblockid' /><input type = 'hidden' name = 'tksblocklabel' value ='' id = 'tksblocklabel' /><div class="row-fluid layoutBlockHeader"><div class="span6 blockLabel padding10"><img class="alignMiddle" src="<?php echo vimage_path('drag.png');?>
" />&nbsp;&nbsp;</div><!--class="span6 blockLabel padding10"--><div class="span6 marginLeftZero" style="float:right !important;"><div class="pull-right btn-toolbar blockActions" style="margin: 4px;"><div class="btn-group"><button class="btn addCustomField" type="button"data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo vtranslate('LBL_NEW_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="icon-plus"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><!--class="btn-group"--><div class="btn-group" data-container="body" data-toggle="popover" data-placement="left" data-content="<?php echo vtranslate('LBL_DELETE_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><button class="btn dropdown-toggle" data-toggle="dropdown"><strong><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu pull-right"><li class="deleteCustomBlock"><a href="javascript:void(0)"><?php echo vtranslate('LBL_DELETE_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li></ul></div><!--class="btn-group"--></div><!--class="pull-right btn-toolbar blockActions"--></div><!--class="span6 marginLeftZero"--></div><!--class="row-fluid layoutBlockHeader"--><div class="blockFieldsList row-fluid blockFieldsSortable" style="padding:5px;min-height: 27px"><ul class="connectedSortable span6 ui-sortable" style="list-style-type: none; float: left;min-height:1px;padding:2px;" name="sortable1"></ul><ul class="connectedSortable span6 ui-sortable" style="list-style-type: none; margin: 0;float: left;min-height:1px;padding:2px;" name="sortable2"></ul></div><!--class="blockFieldsList row-fluid blockFieldsSortable"--></div><!--class="newCustomBlockCopy hide editFieldsTable marginBottom10px border1px blockSortable"--><!--NEW BLOCK DIV END--></div><!--class="contents tabbable"--></div><!--class="container-fluid hide" id="layoutEditorContainer"--><br><hr><p><a class="cancelLink" href="<?php echo $_smarty_tpl->tpl_vars['CLEARCACHEURL']->value;?>
" title="<?php echo vtranslate('LBL_CLEAR_CACHE_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-container="body" data-toggle="popover" data-placement="right" data-content="<?php echo vtranslate('LBL_CLEARCACHE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_CLEAR_CACHE_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><br/><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_CLEAR_CACHE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br/><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_MODULE_INSTALL_NOTES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br/><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_MODULE_INSTALL_NOTES1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p><div class ="tooltiphide hide"><div class="popover popover-tooltip"><div class="arrow"></div><div class="popover-inner"><p style="font-size:9px" ><div class="popover-content" style"font-weight:lighter;position:relative;"><div></div></div></p></div></div></div></div><!--class='container-fluid editViewContainer' id='editViewContainer'--><?php }} ?>