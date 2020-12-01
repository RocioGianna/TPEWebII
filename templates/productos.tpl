{if $usuario and $admin}
{include file="adminHeader.tpl"}
{else if $usuario}
{include file="loggedHeader.tpl"}
{else}
{include file="userHeader.tpl"}
{/if}
<div class="container">
    <h1 class="justify-content-center">Productos</h1>
    {if $usuario}
    <a href="./formFiltro/"><button class="btn btn-success" type="submit" >Filtrar</button></a>
    {/if}
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Consultar</th>
                    {if $usuario}
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    {/if}
                    <th scope="col">Opinion</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $items item=i }
            <tr scope="row">
                {if isset($i->imagen)}
                    <td><img src="{$i->imagen}" alt="" width="150px" height="110px"></td>
                {else}
                    <td width="150px" height="110px"></td>
                {/if}
                    <td>{$i->nombre}</td>
                    <td>{$i->modelo}</td>
                    <td><a href="detalleProducto/{$i->id_zapatilla}"><button type="submit" class="btn btn-light">+ info</button></a></td>
                {if $usuario}
                    <td><a href="showEditForm/{$i->id_zapatilla}"><button type="submit" class="btn btn-warning">Editar</button></a></td>
                    <td><a href="./eliminar/{$i->id_zapatilla}"><button type="submit" class="btn btn-danger">Eliminar</button></a></td>
                {/if}
                <td><a href="api/opinion/{$i->id_zapatilla}"><button type="submit" class="btn btn-light">Comentarios</button></a></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
        <nav>
  <ul class="pagination">
    {if $nro != 1}
        <li class="page-item">
            <a class="page-link" href="productos/{$nro - 1}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
    {/if}
    {if $nro > 1}
        {if $nro > 2}
            <li class="page-item"><a class="page-link" href="productos/{$nro - 2}">{$nro - 2}</a></li>
        {/if}
        <li class="page-item"><a class="page-link" href="productos/{$nro - 1}">{$nro - 1}</a></li>
    {/if}
    <li class="page-item active">
        <a class="page-link" href="productos/{$nro}">página {$nro} <span class="sr-only">(current)</span></a>
    </li>
    {if $nro < $totalpagina}
        <li class="page-item"><a class="page-link" href="productos/{$nro + 1}">{$nro + 1}</a></li>
        {if $nro < $totalpagina - 1}
            <li class="page-item"><a class="page-link" href="productos/{$nro + 2}">{$nro + 2}</a></li>
        {/if}
    {/if}
    {if $nro != $totalpagina} 
        <li class="page-item">
            <a class="page-link" href="productos/{$nro + 1}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    {/if}
    
  </ul>
</nav>
    </div>
    {if $usuario}
    {include file="insertItem.tpl"}
    {/if}
    {include file="footer.tpl"}