@extends('staff.layouts.index')

@section('subtitle')
Dosen Pembimbing Utama Tugas Akhir
@endsection

@section('content')

<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Dosen TA</h3>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('dosenPembimbingTA.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
                                <th>Jumlah Mahasiswa yang Dibimbing</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $dosen)
                            @if ($dosen->pa == "YA")
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dosen->user->name }}</td>
                                <td>{{ $dosen->user->nidn }}</td>
                                <td>{{ $dosen->total_mahasiswa }} Orang</td>
                                <td>
                                    <form action="{{ route('dosenPembimbingTA.destroy', $dosen->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('dosenPembimbingTA.show', $dosen->id) }}" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a>
                                        <a href="{{ route('dosenPembimbingTA.edit', $dosen->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
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
                                <th>Jumlah Mahasiswa yang Dibimbing</th>
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