{include file="userHeader.tpl"}
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
    <div class="row justify-content-center">
        <div class="col-3">
            <h4>Comentarios del producto</h4>
            <ul class="list-group" id="listComents">

            </ul>
        </div>
        <div class="col-3">
            <h4>Nota del producto</h4>
            <ul class="list-group" id="listNotas">

            </ul>
        </div>
        <div class="col-2">
            <h4>Nota del producto</h4>
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentar</h4>
            <form id="formComent" action="insert" method="post">
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
        <div class="col-2">
            <h4>Puntaje</h4>
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>
    <script src="js/comentarios.js"></script>
    {include file="footer.tpl"}