<?php $__env->startSection('main'); ?>
    <div class="table-agile-info">
        <p class="bottompadding10"><button type="submit" class="btn btn-info width100persen marginbottom10">ARTIKEL BARU</button></p>        
        <div class="panel panel-default">
            <div class="panel-heading">
                DAFTAR ARTIKEL
            </div>
        <div>
        <table class="table" ui-jq="footable" ui-options='{
          "paging": {
            "enabled": true
          },
          "filtering": {
            "enabled": true
          },
          "sorting": {
            "enabled": true
          }}'>
            <thead>
                <tr>
                    <th data-breakpoints="xs" class="textaligncenter">No</th>
                    <th class="textaligncenter">Judul Artikel</th>
                    <th class="textaligncenter">Isi Artikel</th>
                    <th class="textaligncenter">Kategori</th>
                    <th class="textaligncenter"><p>Jumlah</p><p>Komentar</p></th>
                    <th class="textaligncenter" style="width:155px;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr data-expanded="true">
                    <td class="textaligncenter">1</td>
                    <td><p>Meja terbang</p><small><i>1 Januari 2018</i></small></td>
                    <td>terdapat meja terbang di indonesia yang.....</td>              
                    <td class="textaligncenter">dalam negeri</td>
                    <td class="textaligncenter">2</td>
                    <td class="textaligncenter">
                        <a href="#myModal" data-toggle="modal" class="btn btn-success" title="LIHAT">
                            <i class="fa fa-eye"></i>
                        </a> 
                        <a href="#myModal" data-toggle="modal" class="btn btn-warning" title="EDIT">
                            <i class="fa fa-pencil"></i>
                        </a> 
                        <a href="#myModal" data-toggle="modal" class="btn btn-danger" title="HAPUS">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    <td>
                </tr>
                <tr>
                    <td class="textaligncenter">2</td>
                    <td><p>Kapal Terbang</p><small><i>11 Februari 2018</i></small></td>
                    <td>terdapat kapal terbang di pontianak yang terbang.....</td>              
                    <td class="textaligncenter">dalam kota</td>
                    <td class="textaligncenter">1024</td>
                    <td class="textaligncenter">
                        <a href="#myModal" data-toggle="modal" class="btn btn-success" title="LIHAT">
                            <i class="fa fa-eye"></i>
                        </a> 
                        <a href="#myModal" data-toggle="modal" class="btn btn-warning" title="EDIT">
                            <i class="fa fa-pencil"></i>
                        </a> 
                        <a href="#myModal" data-toggle="modal" class="btn btn-danger" title="HAPUS">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    <td>
                </tr>
                <tr>
                    <td class="textaligncenter">3</td>
                    <td><p>Piring Terbang</p><small><i>21 Maret 2018</i></small></td>
                    <td>terdapat piring terbang di dalam rumah yang.....</td>              
                    <td class="textaligncenter">dalam rumah</td>
                    <td class="textaligncenter">999999</td>
                    <td class="textaligncenter">
                        <a href="#myModal" data-toggle="modal" class="btn btn-success" title="LIHAT">
                            <i class="fa fa-eye"></i>
                        </a> 
                        <a href="#myModal" data-toggle="modal" class="btn btn-warning" title="EDIT">
                            <i class="fa fa-pencil"></i>
                        </a> 
                        <a href="#myModal" data-toggle="modal" class="btn btn-danger" title="HAPUS">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    <td>
                </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>