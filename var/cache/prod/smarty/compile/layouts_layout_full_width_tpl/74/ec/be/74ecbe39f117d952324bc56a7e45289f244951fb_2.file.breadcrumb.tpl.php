<?php
/* Smarty version 3.1.33, created on 2019-12-09 18:28:48
  from '/var/www/html/themes/warehouse/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dee84505336e2_80209948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74ecbe39f117d952324bc56a7e45289f244951fb' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/breadcrumb.tpl',
      1 => 1575912384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dee84505336e2_80209948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'inherit') {?><div class="container"><?php }?>

<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth') {?>
        <div class="container-fluid">
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth-bg') {?>
        <div class="container">
    <?php }?>
            <div class="row align-items-center">
                <div class="col">
                    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6010994335dee845052b419_81080463', 'breadcrumb');
?>

                    </ol>
                </div>
                <div class="col col-auto"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBreadcrumb'),$_smarty_tpl ) );?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth' || $_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth-bg') {?>
        </div>
        <?php }?>
</nav>
<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'inherit') {?></div><?php }
}
/* {block 'breadcrumb_item'} */
class Block_6029056105dee845052ca71_24070146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <li itemprop="itemListElement" itemscope
                                        itemtype="https://schema.org/ListItem">

                                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?><a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><span itemprop="item" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?></a><?php } else { ?></span><?php }?>


                                        <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
                                    </li>
                                <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_6010994335dee845052b419_81080463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_6010994335dee845052b419_81080463',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_6029056105dee845052ca71_24070146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6029056105dee845052ca71_24070146', 'breadcrumb_item', $this->tplIndex);
?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'breadcrumb'} */
}
