<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{url('admin/dashboard')}}" class=" {{ active('admin/dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li href="">
                    <a href="javascript:;" class="dcjq-parent {{ active(['admin/artikel/*', 'admin/artikel'])}}">
                        <i class="fa fa-book"></i>
                        <span>Artikel</span>
                    </a>
                    <ul class="sub">
                        <li><a class="{{ active('admin/artikel') }}" href="{{url('admin/artikel')}}">Artikel Utama</a></li>
                        <li><a class="{{ active('admin/artikel/kategori') }}" href="{{url('admin/artikel/kategori')}}">Kategori</a></li>
                        <li><a class="{{ active('admin/artikel/komentar') }}" href="{{url('admin/artikel/komentar')}}">Komentar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/acara')}}" class="{{ active('admin/acara') }}" >
                        <i class="fa fa-bullhorn"></i>
                        <span>Acara</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="{{ active(['admin/profil/*', 'admin/profil']) }}">
                        <i class="fa fa-th"></i>
                        <span>Pesantren</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('admin/profil')}}" class="{{ active('admin/profil') }}" >Tambah Profil</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/kontak')}}" class="{{ active('admin/kontak') }}" >
                        <i class="fa fa-bullhorn"></i>
                        <span>Kontak</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>   
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
