<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 15:34:08
  from 'C:\xampp\htdocs\flyshoes.com\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d95d0236c42_80762824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0bbbea6c6c155b2d1025488b011e5594aae3518' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flyshoes.com\\templates\\formEdit.tpl',
      1 => 1603114444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedHeader.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8d95d0236c42_80762824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:loggedHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h2 class="form-group">Editar el producto <?php echo $_smarty_tpl->tpl_vars['item']->value->modelo;?>
</h2>
            <form action="editItem/<?php echo $_smarty_tpl->tpl_vars['item']->value->id_zapatilla;?>
" method="post">
                <div class="form-group">
                    <label>Ingrese modelo</label>
                    <input class="form-control" id="modelo" name="modelo_input" value=<?php echo $_smarty_tpl->tpl_vars['item']->value->modelo;?>
 >
                </div>
                <div class="form-group">
                 <label>Ingrese talle</label>
                    <input class="form-control"  id="talle" name="talle_input" value=<?php echo $_smarty_tpl->tpl_vars['item']->value->talles;?>
 >
                </div>
                <div class="form-group">
                 <label>Ingrese precio</label>
                    <input class="form-control"  id="precio" name="precio_input" value=<?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
 >
                </div>
                <div class="form-group">
                 <label>Ingrese stock</label>
                    <input class="form-control"  id="stock" name="stock_input" value=<?php echo $_smarty_tpl->tpl_vars['item']->value->stock;?>
 >
                </div> 
                <label>Seleccionar une marca</label>
                <select class="form-control" name="marca_input">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['i']->value->id_marca;?>
> <?php echo $_smarty_tpl->tpl_vars['i']->value->nombre;?>
 </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
