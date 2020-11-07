{include file="loggedAdmin.tpl"}
    <div class="container">
        <h1 class="justify-content-center">Usuarios</h1>
       <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Permisos</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $usuarios item=i }
            <tr scope="row">
                <td>{$i->email}</td>
                <td>{$i->rol}</td>
                <td><button type="submit" class="btn btn-light"><a href="deleteUser/{$i->id}">Eliminar</a></button></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
{include file="footer.tpl"}