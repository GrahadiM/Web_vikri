@extends('admin.layouts.index')

@section('subtitle')
List Accounts
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
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal Lahir</th>
                      <th>Jabatan</th>
                      <th>NIDN/NIDK Dosen</th>
                      <th>Alat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  @if ($user->id !== Auth::user()->id)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->birthday }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->nidn }}</td>
                    <td>
                      <a href="{{ route('akun.edit', $user->id) }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                      <form action="{{ route('akun.destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah anda ingin menghapus data {{ $user->name }} dengan email {{ $user->email }}?')"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endif
                  @endforeach
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