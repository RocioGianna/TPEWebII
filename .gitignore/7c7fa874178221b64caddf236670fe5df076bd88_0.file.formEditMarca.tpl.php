<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 16:38:19
  from 'C:\xampp\htdocs\flyshoes.com\templates\formEditMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8da4dbd32691_94413789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c7fa874178221b64caddf236670fe5df076bd88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flyshoes.com\\templates\\formEditMarca.tpl',
      1 => 1603118294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedHeader.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8da4dbd32691_94413789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:loggedHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h2 class="justify-content-center">Editar la marca <?php echo $_smarty_tpl->tpl_vars['marcas']->value->nombre;?>
</h2>
            <form action="editarMarca/<?php echo $_smarty_tpl->tpl_vars['marcas']->value->id_marca;?>
" method="post">
                <div class="form-group">
                    <label for="marcaName">Ingrese el nombre de la marca</label>
                    <input class="form-control" name="nombre_input" value=<?php echo $_smarty_tpl->tpl_vars['marcas']->value->nombre;?>
 >
                </div>
                <div class="form-group">
                    <label for="origenName">Ingrese el origen de la marca</label>
                    <input class="form-control" name="origen_input" value=<?php echo $_smarty_tpl->tpl_vars['marcas']->value->origen;?>
 >
                </div>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
