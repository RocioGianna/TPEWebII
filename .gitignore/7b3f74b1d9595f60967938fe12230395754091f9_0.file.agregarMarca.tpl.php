<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 15:38:45
  from 'C:\xampp\htdocs\flyshoes.com\templates\agregarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d96e51ab125_80586273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3f74b1d9595f60967938fe12230395754091f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flyshoes.com\\templates\\agregarMarca.tpl',
      1 => 1601843878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8d96e51ab125_80586273 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <h1 class="justify-content-center">Agregar una marca</h1>
            <form action="insertar" method="post">
                <div class="form-group">
                    <label for="marcaName">Ingrese el nombre de la marca</label>
                    <input class="form-control" placeholder="Ingrese nombre de la marca" id="nombre" name="nombre_input" >
                </div>
                <div class="form-group">
                    <label for="marcaName">Ingrese el origen de la marca</label>
                    <input class="form-control" placeholder="Ingrese origen" id="origen" name="origen_input" >
                </div>
                <button type="submit" class="btn btn-primary">Insertar</button>
            </form>
        </div>
    </div>
</div><?php }
}
