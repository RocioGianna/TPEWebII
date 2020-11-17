{include file="adminHeader.tpl"}
    <div class="container">
        <h1 class="row justify-content-center">Marcas de {$titulo}</h1>
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
            <td><a href="detallesMarca/{$i->id_marca}"><button type="submit" class="btn btn-light">+ info</button></a></td>
            <td><a href="ShowFormEditMarca/{$i->id_marca}"><button type="submit" class="btn btn-warning">editar</button></a></td>
            <td><a href="borrar/{$i->id_marca}"><button type="submit" class="btn btn-danger">Eliminar</button></a></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="insertMarca.tpl"}
    {include file="footer.tpl"}