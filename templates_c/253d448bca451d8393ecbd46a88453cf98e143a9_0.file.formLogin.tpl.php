<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 14:10:24
  from 'C:\xampp\htdocs\web2\flyshoes.com\TPEWebII\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbd0640dda996_46639095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '253d448bca451d8393ecbd46a88453cf98e143a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\flyshoes.com\\TPEWebII\\templates\\formLogin.tpl',
      1 => 1606182534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:userHeader.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbd0640dda996_46639095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:userHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
        <h2 class="justify-content-center">Login</h2>
            <form action="verifyUser" method="post">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input class="form-control" placeholder="Usuario" name="user_input" >
                </div>
                <div class="form-group">
                    <label for="pass">Clave</label>
                    <input type="password" class="form-control" placeholder="clave" name="pass_input" >
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="newuser">Create una cuenta</a>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
