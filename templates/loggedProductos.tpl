{include file="loggedHeader.tpl"}
    <div class="container">
        <h1 class="justify-content-center">Productos</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Consultar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $items item=i }
            <tr scope="row">
                <td>{$i->nombre}</td>
                <td>{$i->modelo}</td>
                
                    <td><button type="submit" class="btn btn-light"><a href="detalleProducto/{$i->id_zapatilla}">+ info</a></button></td>
                    <td><button type="submit" class="btn btn-warning"><a href="showEditForm/{$i->id_zapatilla}">Editar</a></button></td>
                    <td><button type="submit" class="btn btn-danger"><a href="./eliminar/{$i->id_zapatilla}">Eliminar</a></button></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="agregarItem.tpl"}
    {include file="footer.tpl"}