{include file="loggedHeader.tpl"}
    <div class="container">
        <h1 class="row justify-content-center">Productos</h1>
        <a href="formFiltro/"><button type="submit" class="btn btn-success">Busqueda Avanzada</button></a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Consultar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Deja tu opinion</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $items item=i }
            <tr scope="row">
                <td>{$i->nombre}</td>
                <td>{$i->modelo}</td>
                <td><a href="detalleProducto/{$i->id_zapatilla}"><button type="submit" class="btn btn-light">+ info</button></a></td>
                <td><a href="showEditForm/{$i->id_zapatilla}"><button type="submit" class="btn btn-warning">Editar</button></a></td>
                <td><a href="./eliminar/{$i->id_zapatilla}"><button type="submit" class="btn btn-danger">Eliminar</button></a></td>
                <td><a href="api/opinion/{$i->id_zapatilla}"><button type="submit" class="btn btn-light">Opinar</button></a></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="insertItem.tpl"}
    {include file="footer.tpl"}