<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 04:52:34
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Slideshow\ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1379258c0c3b646e803-70554090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afba7d1d83a0f157b4fca4870401f1ef8ffc53cf' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Slideshow\\ListViewContents.tpl',
      1 => 1489035146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1379258c0c3b646e803-70554090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c0c3b650e63',
  'variables' => 
  array (
    'RECORDS' => 0,
    'SRCMODULE' => 0,
    'COUNT' => 0,
    'RECORD' => 0,
    'FIELDVALUE' => 0,
    'FIELDNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0c3b650e63')) {function content_58c0c3b650e63($_smarty_tpl) {?>

<br>
<?php if (!$_smarty_tpl->tpl_vars['RECORDS']->value){?>
	<center><h1>Welcome to Slideshow<h1>
	<h4>The support is enabled through Javascript for Leads & Contacts!</h4></center>
<?php }else{ ?>
<script type="text/javascript" src="modules/Slideshow/js/remark.min.js"></script>
<style type="text/css">
.remark-slide h1 { font-size: 30px; }
.remark-slide em { font-size: 18px; }
#page { display: none; }
</style>

<!-- Prepare remarkjs friendly source -->
<textarea id="source">
class: center, middle
# <?php echo $_smarty_tpl->tpl_vars['SRCMODULE']->value;?>
 ( <?php echo $_smarty_tpl->tpl_vars['COUNT']->value;?>
 )
---
<?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
?>
Field | Value
---- | ---
<?php  $_smarty_tpl->tpl_vars['FIELDVALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDVALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELDNAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDVALUE']->key => $_smarty_tpl->tpl_vars['FIELDVALUE']->value){
$_smarty_tpl->tpl_vars['FIELDVALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELDNAME']->value = $_smarty_tpl->tpl_vars['FIELDVALUE']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['FIELDVALUE']->value){?>
<?php echo $_smarty_tpl->tpl_vars['FIELDNAME']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['FIELDVALUE']->value;?>

<?php }?>
<?php } ?>
---
<?php } ?>

class: center, middle
# Thank you
</textarea>

<!-- Trigger rendering on the client-side -->
<script type="text/javascript">
	var slideshow = remark.create();
	jQuery(function(){
		jQuery('table').addClass('table table-bordered');
	});
</script>
<?php }?>
<?php }} ?>