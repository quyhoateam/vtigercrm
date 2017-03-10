<?php /* Smarty version Smarty-3.1.7, created on 2017-03-10 03:44:08
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Settings\SwVtTools\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2662158c21f995e8a40-55483735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b23c11e3e9eecdb7639fe31087af3792e7a98530' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\SwVtTools\\Index.tpl',
      1 => 1489117440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2662158c21f995e8a40-55483735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c21f99762ad',
  'variables' => 
  array (
    'show_cron_warning' => 0,
    'comma_numbers_enabled' => 0,
    'entityModules' => 0,
    'tabid' => 0,
    'module' => 0,
    'editSidebar' => 0,
    'sidebars' => 0,
    'sidebar' => 0,
    'gcal_autosync' => 0,
    'customViews' => 0,
    'viewId' => 0,
    'filterName' => 0,
    'importKey' => 0,
    'cvImportColumns' => 0,
    'column' => 0,
    'import_available_fields' => 0,
    'field' => 0,
    'showCVImportError' => 0,
    'availableUsers' => 0,
    'userItem' => 0,
    'EventHandlerActive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c21f99762ad')) {function content_58c21f99762ad($_smarty_tpl) {?><div id="pageOverlay" onclick="closePageOverlay();" style='cursor:url("modules/SwVtTools/icons/cross-button.png"), auto;position:fixed;z-index:20000;top:0;left:0;display:none;height:100%;width:100%;background-image:url("modules/Workflow2/icons/modal.png");'><div id='pageOverlayContent' style='position:fixed;cursor:default;top:100px;margin:auto;left:50%;padding:10px;background-color:#ffffff;'>&nbsp;</div></div>
<div class="container-fluid" id="moduleManagerContents">

    <div class="widget_header row-fluid">
        <div class="span12">
            <h3>
                <b>
                    Stefan Warnat VtigerCRM Tools
                </b>
            </h3>
        </div>
    </div>
    <hr>
    <?php if ($_smarty_tpl->tpl_vars['show_cron_warning']->value==true){?>
        <p class="alert alert-danger"><strong>ERROR:</strong><br/>It looks like you don't activate the Cronjob of this VtigerCRM System. <strong>Please activate!</strong> Otherwise lot's of functions won't work like expected.</p>
    <?php }?>
    <div class="row-fluid">
        <div class="span6">

            <fieldset class="vtToolBox">
                <legend>Numbers with comma</legend>
            <?php if ($_smarty_tpl->tpl_vars['comma_numbers_enabled']->value==true){?>
                You could enter numbers with the use of the comma. <button class="btn btn-warning pull-right" type="button" onclick="return SwVtTools.commaNumbers(false);">deactivate this function</button><br/>
            <?php }else{ ?>
                You could <strong>NOT</strong> enter numbers with the use of the comma. <button class="btn btn-primary pull-right" type="button" onclick="return SwVtTools.commaNumbers(true);">activate this function</button><br/>
            <?php }?>
            </fieldset>
            <fieldset class="vtToolBox">
                    <legend>create default Related Lists</legend>

                <form method="POST" action="#">
                    <input type="hidden" name="tool_action" value="createRelation"/>
                    <input type="radio" name="reltype" value="get_dependents_list" /> Relation against UIType 10 field<br/>
                    <p style="margin-left: 5px;border-left:2px solid #ccc; padding-left:5px;"><strong>Example</strong>: You create a UIType 10 field within Invoices to Projects.<br/>Normally you don't see linked Invoices in a Project. This relation could be activated with this option.<br/><strong>This type require a UIType 10 field in the other direction!</strong></p>
                    <input type="radio" name="reltype" value="get_related_list" checked="checked" /> free Relation without a field<br/>
                    <p style="margin-left: 5px;border-left:2px solid #ccc; padding-left:5px;"><strong>Example</strong>: Works like the relation to documents. You could freely add a link in the direction of this relation. If you want to link one invoice to multiple projects, you couldn't use a UIType 10 field. You need to use this option!</strong></p>
                    <table>
                        <tr>
                            <td>Create RelatedTab here:</td>
                            <td><select name="tabid">
                                    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['tabid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entityModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['tabid']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value[1];?>
</option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Related module:</td>
                            <td><select name="related_tabid">
                                    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['tabid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entityModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['tabid']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value[1];?>
</option>
                                    <?php } ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Label of Relation</td>
                            <td><input type="text" name="label" value=""/></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" class="btn btn-primary" value="create Relation"> </td>
                        </tr>
                    </table>
                </form>
                </fieldset>

            <fieldset class="vtToolBox">
                    <legend>manage sidebar widgets</legend>
                    <?php if (!empty($_smarty_tpl->tpl_vars['editSidebar']->value)){?>
                        <script type="text/javascript">var MOD = {LBL_SAVE:"Save", LBL_CANCEL:"Cancel"};workflowID = 0; workflowModuleName = '<?php echo $_smarty_tpl->tpl_vars['editSidebar']->value['moduleName'];?>
';</script>
                        <form method="POST" action="#" style="border:1px solid #cccccc;padding:10px;margin:10px;">
                            <input type="hidden" name="tool_action" value="saveSidebar"/>

                            <input type="hidden" name="sidebar_id" value="<?php echo $_smarty_tpl->tpl_vars['editSidebar']->value['id'];?>
">
                            <input type="hidden" name="sidebar_tabid" value="<?php echo $_smarty_tpl->tpl_vars['editSidebar']->value['tabid'];?>
">

                        <label style="float:left;width:100px;">Active</label> &nbsp;&nbsp;&nbsp;<input type="checkbox" name="active" value="1" <?php if ($_smarty_tpl->tpl_vars['editSidebar']->value['active']=='1'){?>checked='checked'<?php }?>><br>
                        <label style="clear:both;float:left;width:100px;">Title</label><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['editSidebar']->value['title'];?>
"><br>
                        <label style="clear:both;float:left;width:100px;">Content</label><br>
                            <div class="clearfix"></div>
                            <input type="hidden" id="templateVarContainer" value="" />
                            <input type="button" class="btn btn-primary" value="<?php echo vtranslate('insert Fieldcontent','Settings:Workflow2');?>
" id="btn_insert_variable">

                            <textarea id="sidebarContent" name="content" class='ckeditor'><?php echo stripslashes($_smarty_tpl->tpl_vars['editSidebar']->value['content']);?>
</textarea>
                            <input type="submit" class="btn btn-primary" value="save Widget" />
                        </form>
                        <script type="text/javascript">
                            jQuery( document ).ready( function() {
                            	jQuery( 'textarea#sidebarContent' ).ckeditor();

                                   jQuery('#btn_insert_variable').on('click',function(e) {
                                       insertTemplateField('templateVarContainer','([source]: ([module]) [destination])', true, true,
                                           {
                                               callback: function(text, param) {
                                                   var textarea = CKEDITOR.instances.sidebarContent;
                                                   textarea.insertHtml(text);
                                               }
                                           }
                                       );
                                   });

                               	});
                        </script>
                    <?php }?>
                    <form method="POST" action="#">
                        <input type="hidden" name="tool_action" value="createSidebar"/>
                        <select name="sidebar_module" style="margin:0;">
                            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['tabid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entityModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['tabid']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value[1];?>
</option>
                            <?php } ?>
                        </select>
                        <input type="submit" class="btn btn-primary" value="create Widget" />
                    </form>
                <?php if (count($_smarty_tpl->tpl_vars['sidebars']->value)>0){?>
                <table style="width:100%;">
                    <?php  $_smarty_tpl->tpl_vars['sidebar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sidebar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sidebar']->key => $_smarty_tpl->tpl_vars['sidebar']->value){
$_smarty_tpl->tpl_vars['sidebar']->_loop = true;
?>
                    <tr>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['sidebar']->value['moduleName'];?>
</strong></td>
                        <td style="color:<?php if ($_smarty_tpl->tpl_vars['sidebar']->value['active']=='1'){?>#119a01<?php }else{ ?>#b8671b<?php }?>"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value['title'];?>
</td>
                        <td>
                            <a href="index.php?module=SwVtTools&view=Index&parent=Settings&editSidebar=<?php echo $_smarty_tpl->tpl_vars['sidebar']->value['id'];?>
" class="btn btn-primary">edit</a>
                            <a href="index.php?module=SwVtTools&view=Index&parent=Settings&delSidebar=<?php echo $_smarty_tpl->tpl_vars['sidebar']->value['id'];?>
" class="btn btn-primary">delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <?php }?>
            </fieldset>

        </div> <!-- span6 -->

        <div class="span6">
            <fieldset class="vtToolbox">
                <iframe src="https://shop.stefanwarnat.de/advert.html" width="100%" height="200" frameborder=0 ALLOWTRANSPARENCY="true"></iframe>
            </fieldset>
            <!--<fieldset style="border: 1px solid #cccccc; padding:10px;">
                <legend>activate Comments</legend>
                <form method="POST" action="#">
                    <input type="hidden" name="tool_action" value="addModcomment"/>

                    Activate Comments in this module:
                    <select name="tabid" class="select2" style="width:180px;">
                        <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['tabid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entityModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['tabid']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['tabid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value[1];?>
</option>
                        <?php } ?>
                    </select>
                    <input type="submit" class="btn btn-primary" name="submit" value="Activate"/>
                </form>
            </fieldset>-->
            <fieldset class="vtToolBox">
                <legend>Google Calendar Sync</legend>
                <p><strong>AutoSync:</strong></p>
                <?php if ($_smarty_tpl->tpl_vars['gcal_autosync']->value==true){?>
                    Every configured Google Calendar Sync will be automatically executed from Scheduler. <button class="btn btn-warning" type="button" onclick="return SwVtTools.GCalSync(false);">deactivate this function</button><br/>
                <?php }else{ ?>
                    This function will automatically sync configured Google Calendar connections. <button class="btn btn-primary" type="button" onclick="return SwVtTools.GCalSync(true);">activate this function</button><br/>
                <?php }?>
                <!--<p><strong>Init Google Calendar Chooser</strong></p>
                    <p>This will create the required database table to make us of this function. <button class="btn btn-primary" type="button" onclick="return SwVtTools.initGCalSync();">initialize</button></p>
-->
            </fieldset>
            <fieldset class="vtToolBox">
                <legend>Filter Im-/Export</legend>
                <form method="POST" action="index.php?module=SwVtTools&action=ExportCustomView&parent=Settings" enctype="multipart/form-data">
                    <select name="filterId" class="chzn-select" style="width:350px;">
                        <?php  $_smarty_tpl->tpl_vars['filterName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filterName']->_loop = false;
 $_smarty_tpl->tpl_vars['viewId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customViews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filterName']->key => $_smarty_tpl->tpl_vars['filterName']->value){
$_smarty_tpl->tpl_vars['filterName']->_loop = true;
 $_smarty_tpl->tpl_vars['viewId']->value = $_smarty_tpl->tpl_vars['filterName']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['viewId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['filterName']->value;?>
</option>
                        <?php } ?>
                    </select>
                    <input type="submit" class="btn btn-primary" name="export" value="export filter" />
                </form>
                <hr/>
                <form method="POST" action="#" enctype="multipart/form-data">
                    <?php if (!isset($_smarty_tpl->tpl_vars['importKey']->value)){?>
                        <input type="hidden" name="tool_action" value="cv_import1" />
                        Step 1: Import view: <input type="file" name="customview" />
                        <br/>
                        Select module to Import:
                        <select name="cvImportModule">
                            <option value="">Original one from CustomView</option>
                            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['tabid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entityModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['tabid']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value[1];?>
</option>
                            <?php } ?>
                        </select>
                        <input type="submit" class="btn btn-primary" name="import" value="import filter" />
                    <?php }else{ ?>
                        <input type="hidden" name="tool_action" value="cv_import2" />
                        <input type="hidden" name="cvImportKey" value="<?php echo $_smarty_tpl->tpl_vars['importKey']->value;?>
" />
                        Step 2: Select corresponding fields
                        <div>
                            <label style="display: inline-block;width:200px;font-weight: bold;">Filter Name</label>
                            <input type="text" name="filterName" value="imported Filter" />
                        </div>
                        <br/>
                        <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cvImportColumns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value){
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                            <div>
                                <label style="display: inline-block;width:200px;"><?php echo vtranslate($_smarty_tpl->tpl_vars['column']->value[2],$_smarty_tpl->tpl_vars['column']->value[1]);?>
</label>
                                <select name="column[<?php echo $_smarty_tpl->tpl_vars['column']->value[0];?>
]">
                                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['import_available_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['column']->value[5]==$_smarty_tpl->tpl_vars['field']->value->name){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value->label;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        <?php } ?>
                        <input type="submit" class="btn btn-success" name="import" value="Spalten anwenden" />
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['showCVImportError']->value!=false){?>
                    <br/><strong style="color:red;"><?php echo $_smarty_tpl->tpl_vars['showCVImportError']->value;?>
</strong>
                    <?php }?>
                </form>
                <div></div>
            </fieldset>
            <!--<fieldset style="border: 1px solid #cccccc; padding:10px;">
                <legend>Make Filter to default for all Users</legend>
                <form method="POST" action="#">
                    <input type="hidden" name="tool_action" value="makeCvToDefault" />
                    <select multiple="multiple" name="filterIds[]" class="select2" style="width:350px;">
                        <?php  $_smarty_tpl->tpl_vars['filterName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filterName']->_loop = false;
 $_smarty_tpl->tpl_vars['viewId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customViews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filterName']->key => $_smarty_tpl->tpl_vars['filterName']->value){
$_smarty_tpl->tpl_vars['filterName']->_loop = true;
 $_smarty_tpl->tpl_vars['viewId']->value = $_smarty_tpl->tpl_vars['filterName']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['viewId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['filterName']->value;?>
</option>
                        <?php } ?>
                    </select>
                    <br/>
                    Set for Users:<br/>
                    <select multiple="multiple" name="userIds[]" id="setDefaultCVuserIds" class="select2" style="width:350px;">
                        <?php  $_smarty_tpl->tpl_vars['userItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availableUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userItem']->key => $_smarty_tpl->tpl_vars['userItem']->value){
$_smarty_tpl->tpl_vars['userItem']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['userItem']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['userItem']->value['username'];?>
 - <?php echo $_smarty_tpl->tpl_vars['userItem']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['userItem']->value['last_name'];?>
</option>
                        <?php } ?>
                    </select> <a href="#" onclick='$("#setDefaultCVuserIds > option").prop("selected","selected");$("#setDefaultCVuserIds").trigger("change");return false;'>Select all</a>&nbsp;&nbsp;&nbsp;
                    </select> <a href="#" onclick='$("#setDefaultCVuserIds > option").removeAttr("selected");$("#setDefaultCVuserIds").trigger("change");return false;'>Deselect all</a><br/>
                    <br/>
                    <input type="submit" class="btn btn-primary" name="export" value="make default" />
                </form>
                </fieldset>-->
            <fieldset class="vtToolBox">
                <legend>General Options</legend>
                <table style="width:100%;">
                    <tr>
                        <td><strong>Enable ModComments in all Modules:</strong></td>
                        <td><button class="btn" type="button" onclick="return SwVtTools.GeneralOptions('enableModComments', true);">apply this</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn" type="button" onclick="return SwVtTools.GeneralOptions('recreateUserPrivilegs', true);">Recreate all User Privilege Files</button></td>
                    </tr>
                    <!--<tr>
                        <td><strong>copy mailscanner mailbox:</strong></td>
                        <td><button class="btn btn-warning" type="button" onclick="return SwVtTools.GeneralOptions('initFilterSortOrder', true);">Initialize</button></td>
                    </tr>-->
                </table>
            </fieldset>
            <fieldset class="vtToolBox">
                <legend>EventHandler Functions</legend>

                <?php if ($_smarty_tpl->tpl_vars['EventHandlerActive']->value==true){?><span class="pull-right" style="color:green;font-weight;bold;">ACTIVE</span><?php }else{ ?><span class="pull-right" style="color:red;font-weight;bold;">INACTIVE</span><?php }?>
                <p>The following features require the <a href="https://github.com/swarnat/vtigerCRM-EventHandler/tree/vtiger6">free EventHandler Module</a>.</p><br/>
                <table style="width:100%;">
                    <tr>
                        <td><strong>Initialize sortable CustomViews:</strong></td>
                        <td><button class="btn" type="button" onclick="return SwVtTools.GeneralOptions('initFilterSortOrder', true);">Initialize</button></td>
                    </tr>
                </table>
            </fieldset>
            <a class="btn pull-right" href="index.php?module=SwVtTools&parent=Settings&view=Upgrade">Check for Update</a>
        </div> <!-- span6 -->
    </div>



    <br/>


</div><?php }} ?>