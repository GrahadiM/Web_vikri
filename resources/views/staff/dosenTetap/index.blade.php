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
                    <h3 class="card-title">Dosen Tetap</h3>
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
                                <td>{{ $dosen->pps }}</td>
                                <td>{{ $dosen->bk }}</td>
                                <td>{{ $dosen->ja }}</td>
                                <td>
                                    <a href="{{ url('file/spp', $dosen->spp) }}" target="_blank" rel="noopener noreferrer">
                                        <p>{{ $dosen->spp }}</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('file/skpi', $dosen->skpi) }}" target="_blank" rel="noopener noreferrer">
                                        <p>{{ $dosen->skpi }}</p>
                                    </a>
                                </td>
                                <td>{{ $dosen->mk }}</td>
                                <td>{{ $dosen->kmk }}</td>
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
          
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection