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
                <div class="card-header">
                    <h3 class="card-title">PKM DTPS</h3>
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
                                <th>Sumber Pembiayaan</th>
                                <th>Jumlah Judul Penelitian</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pkm as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->sumber }}</td>
                                <td>{{ $item->total_judul }}</td>
                                <td>
                                    <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Sumber Pembiayaan</th>
                                <th>Jumlah Judul Penelitian</th>
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