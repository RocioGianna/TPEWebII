{include file="loggedHeader.tpl"}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
        <h2 class="justify-content-center">Editar la marca {$marcas->nombre}</h2>
            <form action="editarMarca/{$marcas->id_marca}" method="post">
                <div class="form-group">
                    <label for="marcaName">Ingrese el nombre de la marca</label>
                    <input class="form-control" name="nombre_input" value={$marcas->nombre} >
                </div>
                <div class="form-group">
                    <label for="origenName">Ingrese el origen de la marca</label>
                    <input class="form-control" name="origen_input" value={$marcas->origen} >
                </div>
                <button type="submit" class="btn btn-primary">Cargar</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}