<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:39
  from '/var/www/html/admin786icvj8i/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee84474d2988_91553904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30843accc9ad7f911150e27253f19e6537158c55' => 
    array (
      0 => '/var/www/html/admin786icvj8i/themes/default/template/content.tpl',
      1 => 1575899263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee84474d2988_91553904 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
