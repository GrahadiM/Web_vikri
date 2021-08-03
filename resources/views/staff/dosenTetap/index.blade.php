@extends('staff.layouts.index')

@section('subtitle')
Data Dosen Tetap
@endsection

@section('content')

<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Dosen Tetap</h3>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('dosenTetap.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>NIDN/NIDK</th>
                                <th>Pendidikan Pasca Sarjana</th>
                                <th>Bidang Keahlian</th>
                                <th>Jabatan Akademik</th>
                                <th>Sertifikat Pendidik Profesional</th>
                                <th>Sertifikat Kompetensi Profesi, Industri</th>
                                <th>Mata kuliah yang mampu diampu</th>
                                <th>Kesesuaian Mata Kuliah dengan bidang keahlian yang diampu</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $dosen)
                            @if ($dosen->desc == "Dosen Tetap")
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dosen->user->name }}</td>
                                <td>{{ $dosen->user->nidn }}</td>
                                <td>{{ $dosen->user->pps }}</td>
                                <td>{{ $dosen->user->bk }}</td>
                                <td>{{ $dosen->user->ja }}</td>
                                <td>{{ $dosen->user->spp }}</td>
                                <td>{{ $dosen->user->skpi }}</td>
                                <td>{{ $dosen->user->mk }}</td>
                                <td>{{ $dosen->user->kmk }}</td>
                                <td>
                                    <form action="{{ route('dosenTetap.destroy', $dosen->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('dosenTetap.show', $dosen->id) }}" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a>
                                        <a href="{{ route('dosenTetap.edit', $dosen->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
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
                                <th>Nama Dosen</th>
                                <th>NIDN/NIDK</th>
                                <th>Pendidikan Pasca Sarjana</th>
                                <th>Bidang Keahlian</th>
                                <th>Jabatan Akademik</th>
                                <th>Sertifikat Pendidik Profesional</th>
                                <th>Sertifikat Kompetensi Profesi, Industri</th>
                                <th>Mata kuliah yang mampu diampu</th>
                                <th>Kesesuaian Mata Kuliah dengan bidang keahlian yang diampu</th>
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

@endsection