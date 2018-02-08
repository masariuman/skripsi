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
                


                {{-- SIDEBAR OPERATOR --}}
                @if (Auth::check() && Auth::user()->level =='operator')
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
                        <i class="fa fa-mobile"></i>
                        <span>Kontak</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/pengaturan')}}" class="{{ active('admin/pengaturan') }}" >
                        <i class="fa fa-cog"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/logout')}}" class="{{ active('admin/logout') }}" >
                        <i class="fa fa-sign-out"></i>
                        <span>Keluar</span>
                    </a>
                </li>
                @endif

            </ul>   
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
