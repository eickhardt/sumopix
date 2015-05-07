<?php /* Smarty version Smarty-3.1.19, created on 2015-05-07 11:27:15
         compiled from "C:\xampp\htdocs\sumopix\modules\blockgeographicmaps\views\templates\hook\blockgeographicmaps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21949554b2ff38b0677-78674343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d70f5d1234a5f378371f2f754246724adae96b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumopix\\modules\\blockgeographicmaps\\views\\templates\\hook\\blockgeographicmaps.tpl',
      1 => 1430990742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21949554b2ff38b0677-78674343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_module_name' => 0,
    'my_module_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554b2ff397b8a7_42000090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b2ff397b8a7_42000090')) {function content_554b2ff397b8a7_42000090($_smarty_tpl) {?><!-- Block mymodule -->
<div id="blockgeographicmaps_block_home" class="block">
    <h4>Welcome!</h4>
    <div class="block_content">
        <p>Hello,
            <?php if (isset($_smarty_tpl->tpl_vars['my_module_name']->value)&&$_smarty_tpl->tpl_vars['my_module_name']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['my_module_name']->value;?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'World','mod'=>'blockgeographicmaps'),$_smarty_tpl);?>

            <?php }?>
            !
       </p>
       <ul>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['my_module_link']->value;?>
" title="Click this link">Click me!</a>
            </li>
        </ul>
    </div>
</div>
<!-- /Block mymodule --><?php }} ?>
