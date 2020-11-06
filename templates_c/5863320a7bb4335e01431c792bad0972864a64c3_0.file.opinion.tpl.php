<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 19:37:21
  from 'C:\xampp\htdocs\web2\flyshoes.com\TPEWebII\templates\opinion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa597e1c538e3_29391590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5863320a7bb4335e01431c792bad0972864a64c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\flyshoes.com\\TPEWebII\\templates\\opinion.tpl',
      1 => 1604687830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:loggedHeader.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa597e1c538e3_29391590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:loggedHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row justify-content-center">
        <h2 class="col-12">Les dejamos un espacio para comentar y notar sobre el producto </h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
        <h4 class="form-group">Comentar</h4>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </form>
        </div>
        <div class="col-4">
            <h4>Notar</h4>
            <label for="exampleFormControlSelect1">Ingresar una nota al producto</label>
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="js/opinion.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
