<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 15:38:45
  from 'C:\xampp\htdocs\flyshoes.com\templates\loggedMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d96e5072f45_49023634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be3b0d367ea0c883233ce511515e47a0113e0142' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flyshoes.com\\templates\\loggedMarcas.tpl',
      1 => 1602091794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedHeader.tpl' => 1,
    'file:agregarMarca.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8d96e5072f45_49023634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:loggedHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="justify-content-center">Tabla de todos las marcas de <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Consultar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
            <tr scope="row">
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value->nombre;?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value->origen;?>
</td>
            <td><button type="submit" class="btn btn-light"><a href="detallesMarca/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_marca;?>
">+ info</a></button></td>
            <td><button type="submit" class="btn btn-warning"><a href="ShowFormEditMarca/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_marca;?>
">editar</a></button></td>
            <td><button type="submit" class="btn btn-danger"><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_marca;?>
">Eliminar</a></button></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:agregarMarca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
