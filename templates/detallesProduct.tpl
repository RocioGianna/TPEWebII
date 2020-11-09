{include file="header.tpl"}
    <div class="container">
        <h1 class="justify-content-center">Información del producto </h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Talle</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Comentarios</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $item item=i }
            <tr scope="row">
                <td>{$i->nombre}</td> 
                <td>{$i->modelo}</td> 
                <td>{$i->talles}</td>
                <td>{$i->precio}</td>
                {if $i->stock eq "0"}
                <td>No disponible</td>
                {else}
                <td>Disponible</td>
                {/if}
            </tr>
              {/foreach}
            </tbody>
        </table>
    </div>
    {include file="footer.tpl"}