<?php /* Smarty version Smarty-3.1.17, created on 2014-04-24 18:53:24
         compiled from "../../smarty/templates/a3_main_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21012700115359c014e6d2a8-24827109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a769ed7e297d708c1730eef007b569c93e9bb3' => 
    array (
      0 => '../../smarty/templates/a3_main_view.tpl',
      1 => 1398389296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21012700115359c014e6d2a8-24827109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Links' => 0,
    'Message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5359c014eb4df0_23758861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c014eb4df0_23758861')) {function content_5359c014eb4df0_23758861($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->tpl_vars['Links']->value;?>


    <p>
    <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

    </p>
    <p style="clear: left">&nbsp;</p>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
