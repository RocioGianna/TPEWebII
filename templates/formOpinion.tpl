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
                <td style="display:none"  id="id_producto">{$i->id_zapatilla}<td>
            </tr>
              {/foreach}
            </tbody>
        </table>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentarios del producto</h4>
            <ul class="list-group" id="listComents">
            </ul>
        </div>
        <div class="col-2">
            <h4>Nota del producto</h4>
            <ul class="list-group" id="listNotas">
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <h4>Comentar</h4>
            <form resource="" method="">
                <textarea class="form-control" aria-label="With textarea" id="comentario"></textarea>
                <button class="btn btn-primary" id="btnAddCom">Agregar</button>
            </form>
        </div>
        <div class="col-2">
            <h4>Puntaje</h4>
            <select class="form-control" id="notaItem">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>
    <script src="js/userOpinion.js"></script>
    {include file="footer.tpl"}