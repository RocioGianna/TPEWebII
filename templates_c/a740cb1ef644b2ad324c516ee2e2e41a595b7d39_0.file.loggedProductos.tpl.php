<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-10 01:13:05
  from 'C:\xampp\htdocs\web2\flyshoes.com\TPEWebII\templates\loggedProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa9db113c5b93_78491549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a740cb1ef644b2ad324c516ee2e2e41a595b7d39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\flyshoes.com\\TPEWebII\\templates\\loggedProductos.tpl',
      1 => 1604965954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedHeader.tpl' => 1,
    'file:agregarItem.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa9db113c5b93_78491549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:loggedHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="justify-content-center">Productos</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Consultar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Deja tu opinion</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
            <tr scope="row">
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value->modelo;?>
</td>
                <td><button type="submit" class="btn btn-light"><a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_zapatilla;?>
">+ info</a></button></td>
                <td><button type="submit" class="btn btn-warning"><a href="showEditForm/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_zapatilla;?>
">Editar</a></button></td>
                <td><button type="submit" class="btn btn-danger"><a href="./eliminar/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_zapatilla;?>
">Eliminar</a></button></td>
                <td><button type="submit" class="btn btn-light"><a href="api/comentar/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_zapatilla;?>
">Opinar</a></button></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:agregarItem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
