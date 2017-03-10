<?php /* Smarty version Smarty-3.1.7, created on 2017-02-10 06:43:50
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Google\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13668589d61264510b7-24216130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89865a19116f3b1325259e0d7be461431409a972' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Google\\map.tpl',
      1 => 1486700968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13668589d61264510b7-24216130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_589d61264913c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d61264913c')) {function content_589d61264913c($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>