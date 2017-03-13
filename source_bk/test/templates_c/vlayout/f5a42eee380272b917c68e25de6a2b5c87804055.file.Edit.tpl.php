<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 09:13:30
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\HelloWorld\Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1248158c0fe06da0327-92871793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a42eee380272b917c68e25de6a2b5c87804055' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\HelloWorld\\Edit.tpl',
      1 => 1489050770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248158c0fe06da0327-92871793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c0fe06de9bf',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0fe06de9bf')) {function content_58c0fe06de9bf($_smarty_tpl) {?><div class="listViewPageDiv">
	<form action="/action_page.php">
	  	First name:<br>
	  	<input type="text" name="firstname" value="Mickey">
	  	<br>
	  	Last name:<br>
	  	<input type="text" name="lastname" value="Mouse">
	  	<br><br>
	  	<input type="submit" value="Submit">
	</form>
</div><?php }} ?>