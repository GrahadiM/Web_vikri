@extends('dosen.layouts.index')

@section('subtitle')
Ekuivalen Waktu Mengajar Penuh <br> Dosen Tetap
@endsection

@section('content')

<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> 
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
              <div class="d-flex justify-content-end">
                <a href="" class="btn btn-sm btn-outline-primary">Create</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    @if (auth()->user()->role_id == 1)
                    <th>Nama Dosen</th>
                    @endif
                    <th>Jumlah SKS yang di ajar semester ini</th>
                    <th>Alat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ewmp as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    @if (auth()->user()->role_id == 1)
                    <th>{{ $item->user->name }}</th>
                    @endif
                    <td>{{ $item->total_sks }}</td>
                    <td>
                      <form action="" method="post">
                        <a href="" class="btn btn-sm btn-outline-info">Show</a>
                        <a href="" class="btn btn-sm btn-outline-primary">Edit</a>
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    @if (auth()->user()->role_id == 1)
                    <th>Nama Dosen</th>
                    @endif
                    <th>Jumlah SKS yang di ajar semester ini</th>
                    <th>Alat</th>
                  </tr>
                </tfoot>
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