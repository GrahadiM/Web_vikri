@extends('dosen.layouts.index')

@section('subtitle')
Pengabdian Kepada Masyarakat (PKM) DTPS
@endsection

@section('content')

@if (auth()->user()->role_id == 1)
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">PKM DTPS</h3>
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('PKM-DTPS.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
                                <th>Sumber Pembiayaan</th>
                                <th>Jumlah Judul Penelitian</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pkm as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @if (auth()->user()->role_id == 1)
                                <td>{{ $item->user->name }}</td>
                                @endif
                                <td>{{ $item->sumber }}</td>
                                <td>{{ $item->total_judul }}</td>
                                <td>
                                    <form action="{{ route('PKM-DTPS.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('PKM-DTPS.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
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
          
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endif

@if (auth()->user()->role_id == 3)
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">PKM DTPS</h3>
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('PKM-DTPS.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
                                <th>Sumber Pembiayaan</th>
                                <th>Jumlah Judul Penelitian</th>
                                <th>Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pkm as $item)
                            @if ($item->user->id == auth()->user()->id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @if (auth()->user()->role_id == 1)
                                <td>{{ $item->user->name }}</td>
                                @endif
                                <td>{{ $item->sumber }}</td>
                                <td>{{ $item->total_judul }}</td>
                                <td>
                                    <form action="{{ route('PKM-DTPS.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('PKM-DTPS.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
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
                                @if (auth()->user()->role_id == 1)
                                <th>Nama Dosen</th>
                                @endif
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
          
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endif

@endsection