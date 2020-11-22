<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h1 class="justify-content-center">Agregar un producto</h1>
            <form action="insert" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese modelo" id="modelo" name="modelo_input" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese talle" id="talle" name="talle_input" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese precio" id="precio" name="precio_input" >
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Ingrese stock" id="stock" name="stock_input" >
                </div> 
                {if $admin eq 1}
                <div class="form-group">
                    <label for="imagen">Insertar imagen</label>
                    <input type="file" class="form-control-file" id="img" name="img_input">
                </div> 
                {/if}
                <label>Seleccionar une marca</label>
                <select class="form-control" name="marca_input">
                    {foreach from=$marcas item=i}
                            <option  value="{$i->id_marca}">{$i->nombre}</option>
                    {/foreach}
                </select>
                <button type="submit" class="btn btn-primary">Insertar</button>
            </form>
        </div>
    </div>
</div>
