 {include file="loggedHeader.tpl"}
    <div class="container">
        <h1 class="justify-content-center">Productos</h1>
        <button type="submit" class="btn btn-light"><a href="formFiltro/">Busqueda Avanzada</a></button>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Talle</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
            {foreach from= $items item=i }
            <tr scope="row">
               <td> {$i->nombre} </td>
               <td>  {$i->modelo}</td>
               <td>  {$i->talles}</td>
               <td>  {$i->precio}</td>
            </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
{include file="footer.tpl"}
