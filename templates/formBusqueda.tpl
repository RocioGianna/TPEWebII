{if $usuario and $admin eq '1'}
{include file="adminHeader.tpl"}
{elseif $usuario  and $admin eq '0'}
{include file="loggedHeader.tpl"}
{/if}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h1 class="justify-content-center">Filtro</h1>
            <form action="busqueda" method="post">
            <label>Seleccione une marca</label>
            <select class="form-control" name="marca_input">
                    <option  value="">Todas</option>
                    {foreach from=$marcas item=i}
                        <option  value="{$i->id_marca}">{$i->nombre}</option>
                    {/foreach}
            </select>
                <label>Seleccione su talle</label>
                <div class="form-group">
                 <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="talle_input" value="" checked>
                        <label class="form-check-label" >All</label>
                    </div>
                {foreach from=$talles item=t}
                   <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="talle_input" value="{$t}">
                        <label class="form-check-label" >{$t}</label>
                    </div>
                 {/foreach}
                </div>
                <label>Busque por rango de precio</label>
                <div class="form-group">
                <select class="form-control" name="precio_input">
                    <option  value="">------</option>
                    <option  value="{$min}">Menor a ${$min}</option>
                    <option  value="{$prom}">Menor a ${$prom}</option>
                    <option  value="{$medio}">Menor a ${$medio}</option>
                    <option  value="{$max}">Menor a ${$max}</option>
                 </select>
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}