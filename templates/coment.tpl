{include file="loggedHeader.tpl"}
<div class="container">
    <div class="row justify-content-center">
        <h2 class="col-12">Les dejamos un espacio para comentar y notar sobre el producto </h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-5">
        <h4>Comentar</h4>
            <form id="formComent" action="insert" method="post">
                <textarea class="form-control" aria-label="With textarea"></textarea>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
        <div class="col-5">
            <h4>Comentarios del producto</h4>
            <ul class="list-group" id="comentarios">
            </ul>
        </div>
    </div>
</div>
<script src="js/opinion.js"></script>
{include file="footer.tpl"}