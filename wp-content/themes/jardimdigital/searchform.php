<div class="btn-group dropdown">
  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Pesquisar</button>
  <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
    <li>
      <form action="/" method="get" role="search" class="search-box">
        <div class="form-group has-feedback">
          <input type="text" name="s" class="form-control" placeholder="Pesquisar" value="<?php the_search_query(); ?>">
          <i class="fa fa-search form-control-feedback"></i>
        </div>
      </form>
    </li>
  </ul>
</div>