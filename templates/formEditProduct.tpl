{if $usuario and $admin eq '1'}
{include file="adminHeader.tpl"}
{else if $usuario and $admin eq '0'}
{include file="loggedHeader.tpl"}
{else}
{include file="userHeader.tpl"}
{/if}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h2 class="form-group">Editar el producto {$item->modelo}</h2>
            <form action="editItem/{$item->id_zapatilla}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Ingrese modelo</label>
                    <input class="form-control" id="modelo" name="modelo_input" value={$item->modelo} >
                </div>
                <div class="form-group">
                 <label>Ingrese talle</label>
                    <input class="form-control"  id="talle" name="talle_input" value={$item->talles} >
                </div>
                <div class="form-group">
                 <label>Ingrese precio</label>
                    <input class="form-control"  id="precio" name="precio_input" value={$item->precio} >
                </div>
                <div class="form-group">
                 <label>Ingrese stock</label>
                    <input class="form-control"  id="stock" name="stock_input" value={$item->stock} >
                </div> 
                {if $admin eq 1}
                <div class="form-group">
                    <label for="imagen">Editar imagen</label>
                    <input type="file" class="form-control-file" id="img" name="img_input">
                </div> 
                {/if}
                <label>Seleccionar une marca</label>
                <select class="form-control" name="marca_input">
                    {foreach from=$marcas item=i}
                    <option value={$i->id_marca}> {$i->nombre} </option>
                    {/foreach}
                </select>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}