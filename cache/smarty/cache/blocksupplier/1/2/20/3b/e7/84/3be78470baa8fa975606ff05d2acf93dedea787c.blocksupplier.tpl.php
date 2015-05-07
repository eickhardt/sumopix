<?php /*%%SmartyHeaderCode:12561554b33d3014217-34805597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3be78470baa8fa975606ff05d2acf93dedea787c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sumopix\\themes\\sumopix-theme\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1425640160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12561554b33d3014217-34805597',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554b3c2fb02bb4_83339228',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b3c2fb02bb4_83339228')) {function content_554b3c2fb02bb4_83339228($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://dev-sumopix.dk/da/supplier" title="Leverandører">
					Leverandører
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://dev-sumopix.dk/da/1__fashion-supplier" 
					title="Mere om Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Alle leverandører</option>
													<option value="http://dev-sumopix.dk/da/1__fashion-supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
