<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 04:19:55
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/vlayout\modules\WorldClock\ListViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:698458c0d45c535245-36341736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '721c45b44729b4583beaa123225e36ac9538934b' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\WorldClock\\ListViewSidebar.tpl',
      1 => 1489033188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698458c0d45c535245-36341736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c0d45c572fa',
  'variables' => 
  array (
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0d45c572fa')) {function content_58c0d45c572fa($_smarty_tpl) {?><link rel="stylesheet" href="layouts/vlayout/modules/WorldClock/resources/lib/jquery-clock-plugin/css/analog.css" type="text/css" />
<script src="layouts/vlayout/modules/WorldClock/resources/lib/jquery-clock-plugin/js/jquery.clock.js"></script>

<div style="text-align: center">
	<ul id="worldclock-on-sidebar" class="analog" data-tz="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->name;?>
">
	  <li class="hour"></li>
	  <li class="min"></li>
	  <li class="sec"></li>
	  <li class="meridiem"></li>
	</ul>
</div><?php }} ?>