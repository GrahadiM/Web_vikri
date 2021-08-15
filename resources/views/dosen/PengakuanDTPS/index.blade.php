@extends('dosen.layouts.index')

@section('subtitle')
Pengakuan/Rekognisi DTPS
@endsection

@section('content')

@if (auth()->user()->role_id == 1)
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
           
            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Pengakuan/Rekognisi DTPS</h3>
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('Pengakuan-DTPS.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>no</th>
                              @if (auth()->user()->role_id == 1)
                              <th>Nama Dosen</th>
                              @endif
                              <th>Bidang Keahlian</th>
                              <th>Rekognisi dan Bukti Pendukung</th>
                              <th>Tingkat</th>
                              <th>Alat</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($pengakuan as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            @if (auth()->user()->role_id == 1)
                            <td>{{ $item->user->name }}</td>
                            @endif
                            <td>{{ $item->keahlian }}</td>
                            <td>{{ $item->bukti }}</td>
                            <td>{{ $item->tingkat }}</td>
                            <td>
                                <form action="{{ route('Pengakuan-DTPS.destroy', $item->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  {{-- <a href="" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a> --}}
                                  <a href="{{ route('Pengakuan-DTPS.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                  <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>no</th>
                              @if (auth()->user()->role_id == 1)
                              <th>Nama Dosen</th>
                              @endif
                              <th>Bidang Keahlian</th>
                              <th>Rekognisi dan Bukti Pendukung</th>
                              <th>Tingkat</th>
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
                  <h3 class="card-title">Pengakuan/Rekognisi DTPS</h3>
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('Pengakuan-DTPS.create') }}" class="btn btn-sm btn-outline-primary">Create</a>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>no</th>
                              <th>Bidang Keahlian</th>
                              <th>Rekognisi dan Bukti Pendukung</th>
                              <th>Tingkat</th>
                              <th>Alat</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($pengakuan as $item)
                          @if ($item->user->id == auth()->user()->id)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->keahlian }}</td>
                            <td>
                              <a href="{{ url('file/bukti', $item->bukti) }}" target="_blank" rel="noopener noreferrer">{{ $item->bukti }}</a>
                            </td>
                            <td>{{ $item->tingkat }}</td>
                            <td>
                              <form action="{{ route('Pengakuan-DTPS.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <a href="" class="btn btn-sm btn-outline-info"><i class="fas fa-eye"></i></a> --}}
                                <a href="{{ route('Pengakuan-DTPS.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                              </form>
                            </td>
                          </tr>
                          @endif
                          @endforeach
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>no</th>
                              <th>Bidang Keahlian</th>
                              <th>Rekognisi dan Bukti Pendukung</th>
                              <th>Tingkat</th>
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