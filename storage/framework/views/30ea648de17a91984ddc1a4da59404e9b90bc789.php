<?php $__env->startSection('main'); ?>
    <div class="table-agile-info">
        <p class="bottompadding10"><button type="submit" class="btn btn-info width100persen marginbottom10">ACARA BARU</button></p>        
        <div class="panel panel-default">
            <div class="panel-heading">
                DAFTAR ACARA
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
                    <th class="textaligncenter">Judul Acara</th>
                    <th class="textaligncenter">Isi Acara</th>
                    <th class="textaligncenter">Status</th>
                    <th class="textaligncenter" style="width:155px;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr data-expanded="true">
                    <td class="textaligncenter">1</td>
                    <td><p>Sholat Gerhana</p><small><i>Dibuat pada 2018-31-01 12:12:12</i></small></td>
                    <td>Sholat gerhana di mesjid</td>              
                    <td class="textaligncenter">aktif</td>
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