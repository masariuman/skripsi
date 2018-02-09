@extends('backend')
@section('main')
    <div class="table-agile-info">
        <p class="bottompadding10"><button type="submit" class="btn btn-info width100persen marginbottom10">USER BARU</button></p>        
        <div class="panel panel-default">
            <div class="panel-heading">
                DAFTAR USER
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
                    <th class="textaligncenter">Nama User</th>
                    <th class="textaligncenter">Email</th>
                    <th class="textaligncenter">Jabatan</th>
                    <th class="textaligncenter" style="width:155px;">Pengaturan</th>
                </tr>
            </thead>
            <tbody>
                <tr data-expanded="true">
                    <td class="textaligncenter">1</td>
                    <td class="textaligncenter">MasariuMan</td>
                    <td class="textaligncenter">masariuman@gmail.com</td>              
                    <td class="textaligncenter">admin</td>
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
@stop
