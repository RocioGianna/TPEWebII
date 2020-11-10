{include file="userHeader.tpl"}
    <div class="container">
        <h1 class="justify-content-center">Tabla de todos las marcas de {$titulo}</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Consultar</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $marcas item=i }
            <tr scope="row">
            <td>{$i->nombre}</td> 
            <td>{$i->origen}</td>
            <td><button type="submit" class="btn btn-light"><a href="detallesMarca/{$i->id_marca}">+ info</a></button></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="footer.tpl"}