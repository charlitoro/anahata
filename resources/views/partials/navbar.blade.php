<nav id="nav-menu-container">

  <ul class="nav-menu">
  
    <li class="menu-active"><a href="/">Inicio</a></li>
    <li><a href="/services">Servicios</a></li>
    <li><a href="/schedule">Agendar turno</a></li>
    <li><a href="/about">Acerca de</a></li>
    @if(Auth::check() )
    <li>
      <form action="{{ url('/logout') }}" method="POST" style="display:inline">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-link nav-link " style="display:inline;cursor:pointer" >
          Cerrar sesión
        </button>
        
      </form></li>
    @else
      <li><a href="/login">Inicio sesión</a></li>
    @endif
  </ul>

</nav>

<!--class="btn btn-link nav-link" style="display:inline;cursor:pointer"-->