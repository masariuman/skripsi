<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo e(url('admin/dashboard')); ?>" class=" <?php echo e(active('admin/dashboard')); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li href="">
                    <a href="javascript:;" class="dcjq-parent <?php echo e(active(['admin/artikel/*', 'admin/artikel'])); ?>">
                        <i class="fa fa-book"></i>
                        <span>Artikel</span>
                    </a>
                    <ul class="sub">
                        <li><a class="<?php echo e(active('admin/artikel')); ?>" href="<?php echo e(url('admin/artikel')); ?>">Artikel Utama</a></li>
                        <li><a class="<?php echo e(active('admin/artikel/kategori')); ?>" href="<?php echo e(url('admin/artikel/kategori')); ?>">Kategori</a></li>
                        <li><a class="<?php echo e(active('admin/artikel/komentar')); ?>" href="<?php echo e(url('admin/artikel/komentar')); ?>">Komentar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(url('admin/acara')); ?>" class="<?php echo e(active('admin/acara')); ?>" >
                        <i class="fa fa-bullhorn"></i>
                        <span>Acara</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="<?php echo e(active(['admin/profil/*', 'admin/profil'])); ?>">
                        <i class="fa fa-th"></i>
                        <span>Pesantren</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo e(url('admin/profil')); ?>" class="<?php echo e(active('admin/profil')); ?>" >Tambah Profil</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(url('admin/kontak')); ?>" class="<?php echo e(active('admin/kontak')); ?>" >
                        <i class="fa fa-mobile"></i>
                        <span>Kontak</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('admin/pengaturan')); ?>" class="<?php echo e(active('admin/pengaturan')); ?>" >
                        <i class="fa fa-cog"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('admin/logout')); ?>" class="<?php echo e(active('admin/logout')); ?>" >
                        <i class="fa fa-sign-out"></i>
                        <span>Keluar</span>
                    </a>
                </li>
            </ul>   
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
