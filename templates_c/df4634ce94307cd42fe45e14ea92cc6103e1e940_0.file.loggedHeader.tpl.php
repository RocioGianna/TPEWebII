<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-08 06:00:34
  from 'C:\xampp\htdocs\web2\flyshoes.com\TPEWebII\templates\loggedHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa77b72510a42_36473379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4634ce94307cd42fe45e14ea92cc6103e1e940' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\flyshoes.com\\TPEWebII\\templates\\loggedHeader.tpl',
      1 => 1604785357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa77b72510a42_36473379 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/partialrender.js"><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <h1><a href="home" id="titulo">Fly Shoes</a></h1>
    </header>
        <nav class="navbar navbar-expand navbar-light bg-light" style="height:60px";>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Hombres</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Mujeres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Niños</a>
                    </li>
                    <li class="nav-item">
                        <a href="newuser" class="nav-link suscribir">Suscribir</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">login</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link">log out</a>
                    </li>
                </ul>
                <div>
                     <div class="alert alert-success" role="alert">
                        Conectado
                    </div>
                </div>
            </div>
        </nav>
        <figure class="banner">
            <img src="image/banner.jpg" alt="">
        </figure>
        <aside class="justify-content-center">
            <ul class="list-group list-group-horizontal-xs list-group-horizontal-sm list-group-horizontal-md list-group-horizontal-lg">
                <li class="list-group-item"><a href="./productos">Productos</a></li>
                <li class="list-group-item"><a href="./marcas">Marcas</a></li>
                <li class="list-group-item" id="promocion"><a href="#">Ofertas</a></li>
            </ul>
        </aside>  <?php }
}
