@extends('dosen.layouts.index')

@section('subtitle')
Produk/Jasa DTPS yang diadopsi oleh Industri/Masyarakat
@endsection

@section('content')

@if (auth()->user()->role_id == 1)
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produk/Jasa DTPS</h3>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('Jasa-DTPS.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
                                <th>Nama Produk/Jasa</th>
                                <th>Deskripsi Produk</th>
                                <th>Bukti</th>
                                <th>Tahun</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @if (auth()->user()->role_id == 1)
                                <td>{{ $item->user->name }}</td>
                                @endif
                                <td>{{ $item->produk }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->bukti }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>
                                    <form action="{{ route('Jasa-DTPS.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <a href="" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a> --}}
                                    <a href="{{ route('Jasa-DTPS.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
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
                                <th>Nama Produk/Jasa</th>
                                <th>Deskripsi Produk</th>
                                <th>Bukti</th>
                                <th>Tahun</th>
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
    </div>
    <!-- /.container-fluid -->
</div>
@endif

@if (auth()->user()->role_id == 3)
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Produk/Jasa DTPS</h3>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('Jasa-DTPS.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk/Jasa</th>
                                <th>Deskripsi Produk</th>
                                <th>Bukti</th>
                                <th>Tahun</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            @if ($item->user->id == auth()->user()->id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->produk }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->bukti }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>
                                    <form action="{{ route('Jasa-DTPS.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <a href="" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a> --}}
                                    <a href="{{ route('Jasa-DTPS.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk/Jasa</th>
                                <th>Deskripsi Produk</th>
                                <th>Bukti</th>
                                <th>Tahun</th>
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
    </div>
    <!-- /.container-fluid -->
</div>
@endif

@endsection