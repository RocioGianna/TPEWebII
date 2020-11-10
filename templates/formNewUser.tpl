{include file="userHeader.tpl"}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <div class="alert alert-danger" role="alert">
            {$message}
        </div>
        <h2 class="justify-content-center">Crear una cuenta</h2>
            <form action="insertnewuser" method="post">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input class="form-control" placeholder="Usuario" name="user_input" >
                </div>
                <div class="form-group">
                    <label for="pass">Clave</label>
                    <input type="password" class="form-control" placeholder="clave" name="pass_input" >
                </div>
                <button type="submit" class="btn btn-primary">Nueva cuenta</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}