
  @guest
 
  @else 
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Catalogos
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{!! route('tipo') !!}">Tipo</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Registros
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{!! route('lugar') !!}">Lugar</a>
    </div>
  </li>
  @endguest
  