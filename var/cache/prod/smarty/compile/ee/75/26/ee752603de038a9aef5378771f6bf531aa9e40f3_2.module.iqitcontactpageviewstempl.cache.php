<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from 'module:iqitcontactpageviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee8450563258_57689144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee752603de038a9aef5378771f6bf531aa9e40f3' => 
    array (
      0 => 'module:iqitcontactpageviewstempl',
      1 => 1575912383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqitcontactpage/views/templates/hook/_partials/content.tpl' => 1,
  ),
),false)) {
function content_5dee8450563258_57689144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '9713217585dee8450561760_94746691';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20524947665dee8450561f48_06592743', 'iqitcontactpage-info-block');
?>

<?php }
/* {block 'iqitcontactpage-info-block'} */
class Block_20524947665dee8450561f48_06592743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcontactpage-info-block' => 
  array (
    0 => 'Block_20524947665dee8450561f48_06592743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col col-md block block-toggle block-iqitcontactpage js-block-toggle">
        <h5 class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'iqitcontactpage'),$_smarty_tpl ) );?>
</span></h5>
        <div class="block-content">
            <?php $_smarty_tpl->_subTemplateRender('module:iqitcontactpage/views/templates/hook/_partials/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
<?php
}
}
/* {/block 'iqitcontactpage-info-block'} */
}
