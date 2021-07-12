<div class="col-sm-2">
    <ul class="list-group">
    @if (Auth::user()->tipo_usuario == '1')   
        <li class="list-group-item">
            <a href="/admin/configuracion">Configuración</a>
        </li>
       
        <li class="list-group-item">
            <a href="/admin/categoria">Categorias</a>
        </li>
        @endif

        <li class="list-group-item">
            <a href="/admin/post">Blog</a>
        </li>
        @if (Auth::user()->tipo_usuario == '1')   
        <li class="list-group-item">
            <a href="/admin/carrusel">Carrusel</a>
        </li>
        @endif

        <!-- <li class="list-group-item">
            <a href="/admin/empresa">Empresa</a>
        </li> -->
        <li class="list-group-item">
            <a href="/admin/Testimonios">Testimonios</a>
        </li>
        <li class="list-group-item">
            <a href="/admin/evento">Eventos</a>
        </li>
        @if (Auth::user()->tipo_usuario == '1')   
        <li class="list-group-item">
            <a href="/admin/carruselgaleria">Carrusel Galeria</a>
        </li>
        @endif
    



    </ul>
</div>