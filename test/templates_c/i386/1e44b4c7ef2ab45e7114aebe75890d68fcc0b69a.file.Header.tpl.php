<?php /* Smarty version Smarty-3.1.7, created on 2017-03-09 08:35:50
         compiled from "E:\A_project\vtigercrm\includes\runtime/../../layouts/i386\modules\Vtiger\Header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065958c113e677fe36-34038949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e44b4c7ef2ab45e7114aebe75890d68fcc0b69a' => 
    array (
      0 => 'E:\\A_project\\vtigercrm\\includes\\runtime/../../layouts/i386\\modules\\Vtiger\\Header.tpl',
      1 => 1489048482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065958c113e677fe36-34038949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPTITLE' => 0,
    'CURRENT_USER_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58c113e67bd78',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c113e67bd78')) {function content_58c113e67bd78($_smarty_tpl) {?><!doctype html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['APPTITLE']->value;?>
</title>
		
		<link rel="stylesheet" type="text/css" href="layouts/i386/libraries/bootstra.386/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="layouts/i386/libraries/bootstra.386/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="layouts/i386/skins/application.css">
		
		<script type="text/javascript" src="layouts/i386/libraries/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="layouts/i386/libraries/bootstra.386/js/bootstrap.js"></script>
		<script type="text/javascript" src="layouts/i386/skins/application.js"></script>
		
	</head>
	<body>
		
		<?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value){?>	
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="collapse nav-collapse">
						<ul class="nav">
							<li <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'){?>class="active"<?php }?>>
								<a href="index.php" class="active">Vtiger</a>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['MODULE']->value&&$_smarty_tpl->tpl_vars['MODULE']->value!='Home'){?>
							<li class="active">
								<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
							</li>
							<?php }?>							
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('last_name');?>
</a>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="index.php?module=Users&action=Logout">Logout</a>
									</li>
								</ul>
							</li>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
		<?php }} ?>