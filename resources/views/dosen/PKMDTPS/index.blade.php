@extends('dosen.layouts.index')

@section('subtitle')
Pengabdian Kepada Masyarakat (PKM) DTPS
@endsection

@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Dosen</th>
                      <th>Sumber Pembiayaan </th>
                      <th>Jumlah Judul Penelitian</th>
                      <th>Alat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href=""><i class="fas fa-pencil-alt"></i></a>
                        <a href=""> <i class="fas fa-eye"></i></a>
                        <a href=""> <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a href=""><i class="fas fa-pencil-alt"></i></a>
                        <a href=""> <i class="fas fa-eye"></i></a>
                        <a href=""> <i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-12 -->
        <div class="col-lg-9">
            <hr>
          <h4 style="font-weight: bold;">Aktivitas Terakhir</h4>
          <div class="row">
              <div class="col-sm-4">
                  <div class="card" style="background-color: aliceblue; border-radius: 36px;">
                      <div class="card-body">
                          <h4 style="padding: 36px 36px 36px 52px;">Aktivitas 1</h4>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="card" style="background-color: aliceblue; border-radius: 36px;">
                      <div class="card-body">
                          <h4 style="padding: 36px 36px 36px 52px;">Aktivitas 2</h4>
                      </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="card" style="background-color: aliceblue; border-radius: 36px;">
                      <div class="card-body">
                          <h4 style="padding: 36px 36px 36px 52px;">Aktivitas 3</h4>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <!-- /.col-md-9 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection