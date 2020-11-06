<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:08:36
  from 'C:\xampp\htdocs\web2\flyshoes.com\TPEWebII\templates\coment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa59f3471f9d9_96748075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6760e163f4562a796a61e0784b4faced1ab703fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\flyshoes.com\\TPEWebII\\templates\\coment.tpl',
      1 => 1604689713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedHeader.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa59f3471f9d9_96748075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:loggedHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row justify-content-center">
        <h2 class="col-12">Les dejamos un espacio para comentar y notar sobre el producto </h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
        <h4>Comentar</h4>
            <form action="" method="post">
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </form>
        </div>
        <div class="col-5">
            <h4>Comentarios del producto</h4>
            <ul class="list-group">
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="js/opinion.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
