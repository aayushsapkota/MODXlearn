<?php /* Smarty version 3.1.27, created on 2017-08-11 12:33:44
         compiled from "C:\xampp\htdocs\projects\MODXlearn\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1833539361598d88088bdc89_49527733%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462496b0b03e3779c421586bcb5186004c5e6120' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\MODXlearn\\manager\\templates\\default\\welcome.tpl',
      1 => 1502446667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1833539361598d88088bdc89_49527733',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_598d88088cac23_24259451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_598d88088cac23_24259451')) {
function content_598d88088cac23_24259451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1833539361598d88088bdc89_49527733';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>