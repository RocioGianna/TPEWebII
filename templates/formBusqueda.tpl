{include file="loggedHeader.tpl"}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h1 class="justify-content-center">Busque el producto que necesita</h1>
            <form action="busqueda" method="post">
                <div class="form-group">
                    <input class="form-control" placeholder="Precio hasta" name="precio_input" >
                </div>
                <label>Seleccionar une marca</label>
                <select class="form-control" name="marca_input">
                    {foreach from=$marcas item=i}
                            <option  value="{$i->id_marca}">{$i->nombre}</option>
                    {/foreach}
                </select>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}