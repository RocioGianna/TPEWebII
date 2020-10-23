<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 19:06:01
  from 'C:\xampp\htdocs\flyshoes.com\templates\detallesProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f930d79ef7397_02203701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd027ac4a7c3409de92159ae0f6ca9395b9689697' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flyshoes.com\\templates\\detallesProduct.tpl',
      1 => 1603472753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f930d79ef7397_02203701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="justify-content-center">Información del producto </h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Talle</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
            <tr scope="row">
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value->nombre;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value->modelo;?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value->talles;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value->precio;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['i']->value->stock == "0") {?>
                <td>No disponible</td>
                <?php } else { ?>
                <td>Disponible</td>
                <?php }?>
            </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
