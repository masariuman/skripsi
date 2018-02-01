<?php $__env->startSection('main'); ?>
    <div class="table-agile-info">
        <p class="bottompadding10"><button type="submit" class="btn btn-info width100persen marginbottom10">KATEGORI BARU</button></p>        
        <div class="panel panel-default">
            <div class="panel-heading">
                DAFTAR KATEGORI
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
                    <th class="textaligncenter">Nama</th>
                    <th class="textaligncenter"><p>Isi</p>Komentar</th>
                    <th class="textaligncenter"><p>Tanggal</p><p>Komentar</p></th>
                    <th class="textaligncenter">Status</th>
                    <th class="textaligncenter" style="width:155px;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr data-expanded="true">
                    <td class="textaligncenter">1</td>
                    <td class="textaligncenter"><p>Piring Terbang</p></td>
                    <td>Arif Setiawan</td>
                    <td>webnya ok</td>
                    <td class="textaligncenter"><p>2017-12-02</p><small>13:51:02</small></td>
                    <td class="textaligncenter">belum dibaca</td>
                    <td class="textaligncenter">
                        <a href="#myModal" data-toggle="modal" class="btn btn-success" title="LIHAT">
                            <i class="fa fa-eye"></i>
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