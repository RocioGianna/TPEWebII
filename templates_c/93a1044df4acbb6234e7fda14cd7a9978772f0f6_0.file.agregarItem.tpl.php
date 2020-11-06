<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 16:30:24
  from 'C:\xampp\htdocs\web2\flyshoes.com\TPEWebII\templates\agregarItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa56c10041c86_81981965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93a1044df4acbb6234e7fda14cd7a9978772f0f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\flyshoes.com\\TPEWebII\\templates\\agregarItem.tpl',
      1 => 1603579633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa56c10041c86_81981965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h1 class="justify-content-center">Agregar un producto</h1>
            <form action="insert" method="post">
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese modelo" id="modelo" name="modelo_input" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese talle" id="talle" name="talle_input" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese precio" id="precio" name="precio_input" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese stock" id="stock" name="stock_input" >
                </div> 
                <label>Seleccionar une marca</label>
                <select class="form-control" name="marca_input">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                            <option  value="<?php echo $_smarty_tpl->tpl_vars['i']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->nombre;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <button type="submit" class="btn btn-primary">Insertar</button>
            </form>
        </div>
    </div>
</div>
<?php }
}
