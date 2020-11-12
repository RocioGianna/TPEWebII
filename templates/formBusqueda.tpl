{include file="loggedHeader.tpl"}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h1 class="justify-content-center">Filtro</h1>
            <form action="busqueda" method="post">
            <label>Seleccione une marca</label>
            <select class="form-control" name="marca_input">
                    <option  value="100">Todas</option>
                    {foreach from=$marcas item=i}
                        <option  value="{$i->id_marca}">{$i->nombre}</option>
                    {/foreach}
                </select>
                <div class="form-group">
                <label>Busque por talle</label>
                    <input class="form-control" placeholder="Talle" name="talle_input" >
                </div>
                <label>Busque por rango de precio</label>
                <div class="form-group">
                <select class="form-control" name="precio_input">
                    <option  value="10000000">------</option>
                    <option  value="4000">Menor a $4000 </option>
                    <option  value="6000">Menor a $6000</option>
                    <option  value="7500">Menor a $7500</option>
                    <option  value="9000">Menor a $9000</option>
                 </select>
                <br>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}