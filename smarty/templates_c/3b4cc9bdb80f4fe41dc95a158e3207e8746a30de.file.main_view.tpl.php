<?php /* Smarty version Smarty-3.1.17, created on 2014-04-24 18:54:19
         compiled from "../../smarty/templates/main_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4250522545359c04b7174e1-71220369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b4cc9bdb80f4fe41dc95a158e3207e8746a30de' => 
    array (
      0 => '../../smarty/templates/main_view.tpl',
      1 => 1398316554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4250522545359c04b7174e1-71220369',
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
  'unifunc' => 'content_5359c04b7c8b14_36697721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5359c04b7c8b14_36697721')) {function content_5359c04b7c8b14_36697721($_smarty_tpl) {?>	

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
