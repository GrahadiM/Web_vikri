@extends('dosen.layouts.index')

@section('subtitle')
Ekuivalen Waktu Mengajar Penuh <br> Dosen Tetap
@endsection

@section('content')

@if (auth()->user()->role_id == 1)
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> 
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
              <div class="d-flex justify-content-end">
                <a href="{{ route('EWMP-DTPT.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
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
                      <form action="{{ route('EWMP-DTPT.destroy', $item->id) }}" method="post">
                        <a href="{{ route('EWMP-DTPT.show', $item->id) }}" class="btn btn-sm btn-outline-info">Show</a>
                        <a href="{{ route('EWMP-DTPT.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
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
              <h3 class="card-title">DataTable with default features</h3>
              <div class="d-flex justify-content-end">
                <a href="{{ route('EWMP-DTPT.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jumlah SKS yang di ajar semester ini</th>
                    <th>Alat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ewmp as $item)
                  @if ($item->user->id == auth()->user()->id)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->total_sks }}</td>
                    <td>
                      <form action="{{ route('EWMP-DTPT.destroy', $item->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                        {{-- <a href="{{ route('EWMP-DTPT.show', $item->id) }}" class="btn btn-sm btn-outline-info">Show</a> --}}
                        <a href="{{ route('EWMP-DTPT.edit', $item->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
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
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endif

@endsection