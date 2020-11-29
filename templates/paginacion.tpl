<nav>
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="pagina/{$paginas}">{$pag - 1}</a></li>
    {foreach from= $paginas item=i }
        <li class="page-item"><a class="page-link" href="pagina/{$i}">{$i}</a></li>
    {/foreach}
    <li class="page-item"><a class="page-link" href="pagina/{$paginas}">{paginas}</a></li>
  </ul>
</nav>
