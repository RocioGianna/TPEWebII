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
                    <th scope="col">Comentar</th>
                    <th scope="col">Notar</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $items item=i }
            <tr scope="row">
                <td>{$i->nombre}</td>
                <td>{$i->modelo}</td>
<<<<<<< HEAD
                <td><button type="submit" class="btn btn-light"><a href="detalleProducto/{$i->id_zapatilla}">+ info</a></button></td>
                <td><button type="submit" class="btn btn-warning"><a href="showEditForm/{$i->id_zapatilla}">Editar</a></button></td>
                <td><button type="submit" class="btn btn-danger"><a href="./eliminar/{$i->id_zapatilla}">Eliminar</a></button></td>
                <td><button type="submit" class="btn btn-light"><a href="./comentar/{$i->id_zapatilla}">Comentar</a></button></td>
                <td><button type="submit" class="btn btn-light"><a href="./notar/{$i->id_zapatilla}">Notar</a></button></td>
=======
                
                    <td><button type="submit" class="btn btn-light"><a href="detalleProducto/{$i->id_zapatilla}">+ info</a></button></td>
                    <td><button type="submit" class="btn btn-warning"><a href="showEditForm/{$i->id_zapatilla}">Editar</a></button></td>
                    <td><button type="submit" class="btn btn-danger"><a href="./eliminar/{$i->id_zapatilla}">Eliminar</a></button></td>
>>>>>>> cbec00e429a77a16fe768d1edf50e91a04d5437c
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="agregarItem.tpl"}
    {include file="footer.tpl"}