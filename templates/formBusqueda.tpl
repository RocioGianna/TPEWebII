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
                <label>Seleccione su talle</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="talle_input" id="inlineRadio1" value="37">
                        <label class="form-check-label" >37</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="talle_input" id="inlineRadio1" value="38">
                        <label class="form-check-label" >38</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="talle_input" id="inlineRadio1" value="39">
                        <label class="form-check-label" >39</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="talle_input" id="inlineRadio1" value="40">
                        <label class="form-check-label" >40</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="talle_input" id="inlineRadio1" value="41">
                        <label class="form-check-label" >41</label>
                    </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="talle_input" id="inlineRadio1" value="42">
                        <label class="form-check-label" >42</label>
                    </div>
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