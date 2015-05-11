<?php /* Smarty version Smarty-3.1.19, created on 2015-05-11 10:53:45
         compiled from "C:\xampp\htdocs\sumopix\themes\sumopix-theme\modules\blocktopmenu\blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2503055506e1990f635-54722349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3259844fc04630116597a9bc83274f3aea852667' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumopix\\themes\\sumopix-theme\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1430391535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2503055506e1990f635-54722349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'lang_iso' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55506e199c6fe6_18915157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55506e199c6fe6_18915157')) {function content_55506e199c6fe6_18915157($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Categories",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<li>
				<a id="logo_link" href="/">
					<img id="sumopix_logo" src="/img/logo.png" alt="SUMOpix Logo">
				</a>
			</li>
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			<li>
				<a href="/shop" id="start_here">
				<?php if ($_smarty_tpl->tpl_vars['lang_iso']->value=='en') {?>
					Start here
				<?php } else { ?>
					Start her
				<?php }?>
				</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
