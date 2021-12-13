<div class="sidebar shadow">
    <!-- SECTION TOP -->
    <div class="section-top">
        <!-- seccion del usuario -->
        <div class="user">

            <!-- logo -->
            <div class="logo">
                <img id="img-logo" src="{{asset('logo/Seskirla-logo2-yellow.png')}}">
            </div>
            <!-- div containing all the personal data about admin -->
            <div class="admin-info">

                <!-- subtitulo logo -->
                <span class="subtitle">
                    Hola:
                </span>

                <!-- nombre  -->
                <div class="name">
                    {{Auth::user()->name}}
                    <a href="{{url('/logout')}}" data-toggle="tooltip" data-placement="top" title="salir">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>

                <!-- email -->
                <div class="email">
                    {{Auth::user()->email}}
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="main">
        <ul>
            <li>
                <a href="{{url('/admin')}}"><i class="fas fa-home"></i>Dashboard</a>
            </li>

            <li>
                <a href="{{url('/admin/users')}}"><i class="fas fa-user-friends"></i>Usuarios</a>
            </li>

            <li>
                <a href="{{url('/admin/products')}}"><i class="fas fa-boxes"></i>Productos</a>
            </li>

            <li>
                <a href="{{url('/admin/categories/0')}}"><i class="fas fa-folder-open"></i>Categorías</a>
            </li>
        </ul>
    </div>

</div>