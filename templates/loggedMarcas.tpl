{include file="loggedHeader.tpl"}
    <div class="container">
        <h1 class="justify-content-center">Tabla de todos las marcas de {$titulo}</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Consultar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $marcas item=i }
            <tr scope="row">
            <td>{$i->nombre}</td> 
            <td>{$i->origen}</td>
            <td><button type="submit" class="btn btn-light"><a href="detallesMarca/{$i->id_marca}">+ info</a></button></td>
            <td><button type="submit" class="btn btn-warning"><a href="ShowFormEditMarca/{$i->id_marca}">editar</a></button></td>
            <td><button type="submit" class="btn btn-danger"><a href="borrar/{$i->id_marca}">Eliminar</a></button></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="insertMarca.tpl"}
    {include file="footer.tpl"}