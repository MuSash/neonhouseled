<nav id="side-nav" class="side_nav p-0">
  <div class="d-flex justify-content-end justify-content-lg-start align-items-center side__nav__head">
    <h1 class="m-0 ps-3 d-none d-lg-block side__nav--title">DASHBOARD</h1>
    <div class="d-lg-none mr-3 open-menu">
      <input id="open-close-nav" class="d-none" type="checkbox">
      <label for="open-close-nav" class="m-0">
        <i class="fas fa-ellipsis-h"></i>
      </label>
    </div>
  </div>
  <ul class="m-0 p-0">
    <li class="mt-1 mb-1 active" id="platillo" >
      <a href="<?php echo constant('URL') ?>dashboard"  class="d-flex align-items-center side__nav--link">
        <i class="fas fa-pencil-alt side__nav--icon nav-item-icon"></i>Platillos
      </a>
    </li>

    <li class="mt-1 mb-1" id="categoria">
      <a href="<?php echo constant('URL') ?>categoriadash"  class="d-flex align-items-center side__nav--link">
        <i class="fas fa-comments side__nav--icon nav-item-icon"></i>Categorias
      </a>
    </li>

    <li class="mt-1 mb-1" id= "subcategoria">
        <a href="<?php echo constant('URL') ?>subcategoria"  class="d-flex align-items-center side__nav--link">
            <i class="fas fa-bullseye side__nav--icon nav-item-icon"></i>
            Sub-categorias
        </a>
    </li>

      <li class="mt-1 mb-1" id="categoria">
        <a href="<?php echo constant('URL') ?>usuario"  class="d-flex align-items-center side__nav--link">
          <i class="fas fa-comments side__nav--icon nav-item-icon"></i>Usuarios
        </a>
      </li>
  </ul>
</nav>
