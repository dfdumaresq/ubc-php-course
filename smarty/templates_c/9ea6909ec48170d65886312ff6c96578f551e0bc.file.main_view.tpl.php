<?php /* Smarty version Smarty-3.1.17, created on 2014-04-24 18:57:09
         compiled from "../../ext/templates/main_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19008299605359c0f55de2a2-67681205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea6909ec48170d65886312ff6c96578f551e0bc' => 
    array (
      0 => '../../ext/templates/main_view.tpl',
      1 => 1398316554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19008299605359c0f55de2a2-67681205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Message' => 0,
    'Links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5359c0f5829356_97082119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c0f5829356_97082119')) {function content_5359c0f5829356_97082119($_smarty_tpl) {?>	

	<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <p>
    <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

    </p>
    <p style="clear: left">&nbsp;</p>

    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['link']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['link']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['link']->iteration++;
 $_smarty_tpl->tpl_vars['link']->last = $_smarty_tpl->tpl_vars['link']->iteration === $_smarty_tpl->tpl_vars['link']->total;
?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['text'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['link']->last) {?><?php } else { ?>|<?php }?>
    <?php } ?>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
