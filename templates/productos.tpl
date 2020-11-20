{if $usuario and $admin eq '1'}
{include file="adminHeader.tpl"}
{else if $usuario and $admin eq '0'}
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
                    <th scope="col">Deja tu opinion</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $items item=i }
            <tr scope="row">
                <td><img src="{$i->imagen}" alt="" width="150px" height="110px"></td>
                <td>{$i->nombre}</td>
                <td>{$i->modelo}</td>
                <td><a href="detalleProducto/{$i->id_zapatilla}"><button type="submit" class="btn btn-light">+ info</button></a></td>
                {if $usuario}
                <td><a href="showEditForm/{$i->id_zapatilla}"><button type="submit" class="btn btn-warning">Editar</button></a></td>
                <td><a href="./eliminar/{$i->id_zapatilla}"><button type="submit" class="btn btn-danger">Eliminar</button></a></td>
                {/if}
                <td><a href="api/opinion/{$i->id_zapatilla}"><button type="submit" class="btn btn-light">Opinar</button></a></td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {if $usuario and $admin eq '1'}
    {include file="insertItem.tpl"}
    {/if}
    {include file="footer.tpl"}