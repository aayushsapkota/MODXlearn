<?php /* Smarty version 3.1.27, created on 2017-08-11 12:33:13
         compiled from "C:\xampp\htdocs\projects\MODXlearn\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:262804948598d87e907e7c9_88101732%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0234af621b7a0827e5bc1ee425c296ef23b7a35f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\MODXlearn\\setup\\templates\\footer.tpl',
      1 => 1502446675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262804948598d87e907e7c9_88101732',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_598d87e909b2c9_22532885',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_598d87e909b2c9_22532885')) {
function content_598d87e909b2c9_22532885 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/xampp/htdocs/projects/MODXlearn/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '262804948598d87e907e7c9_88101732';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>