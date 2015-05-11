<?php /*%%SmartyHeaderCode:489955506e1a406791-29419545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3683140136291387fc57ec7e9d307f8654caa4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumopix\\themes\\sumopix-theme\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489955506e1a406791-29419545',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55506e24cd6be2_17617680',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55506e24cd6be2_17617680')) {function content_55506e24cd6be2_17617680($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
						Producenter
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://dev-sumopix.dk/da/1_fashion-manufacturer" title="Mere om Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Alle producenter</option>
													<option value="http://dev-sumopix.dk/da/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
