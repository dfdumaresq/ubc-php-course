<?php /* Smarty version Smarty-3.1.17, created on 2014-04-24 18:57:02
         compiled from "../../ext/templates/a3_main_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12620278405359c0eecd3218-73921938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f73644f0988052d2bde10d3d97b1a9d62e8ea3d' => 
    array (
      0 => '../../ext/templates/a3_main_view.tpl',
      1 => 1398389296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12620278405359c0eecd3218-73921938',
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
  'unifunc' => 'content_5359c0eed80207_25732203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c0eed80207_25732203')) {function content_5359c0eed80207_25732203($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->tpl_vars['Links']->value;?>


    <p>
    <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

    </p>
    <p style="clear: left">&nbsp;</p>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
