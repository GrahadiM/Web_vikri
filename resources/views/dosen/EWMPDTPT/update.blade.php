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
              <h3 class="card-title">Form Update</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form class="form" method="POST" action="{{ route('EWMP-DTPT.update', $item->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="user_id" class="col-md-12 col-form-label text-md-left">Nama Dosen</label>
                                        <div class="col-md-12">
                                            <select name="user_id" class="form-control">
                                                <option value="{{ $item->user->id }}">{{ $item->user->name }}</option>
                                                {{-- @foreach ($users as $user)
                                                @if ($user->role_id == 3)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endif
                                                @endforeach --}}
                                            </select>
                                            <p class="text-danger">{{ $errors->first("user_id") }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="desc" class="col-md-12 col-form-label text-md-left">Deskripsi</label>
                                        <div class="col-md-12">
                                            <select name="desc" class="form-control">
                                                <option value="{{ $item->desc }}">{{ $item->desc }}</option>
                                                <option value="Dosen Tetap">Dosen Tetap</option>
                                                <option value="Dosen Tidak Tetap">Dosen Tidak Tetap</option>
                                            </select>
                                            <p class="text-danger">{{ $errors->first("desc") }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pps" class="col-md-12 col-form-label text-md-left">Pendidikan Pasca Sarjana</label>
                                        <div class="col-md-12">
                                            <input name="pps" type="text" id="pps" class="form-control" value="{{ $item->pps }}">
                                            <p class="text-danger">{{ $errors->first("pps") }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bk" class="col-md-12 col-form-label text-md-left">Bidang Keahlian</label>
                                        <div class="col-md-12">
                                            <input name="bk" type="text" id="bk" class="form-control" value="{{ $item->bk }}">
                                            <p class="text-danger">{{ $errors->first("bk") }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ja" class="col-md-12 col-form-label text-md-left">Jabatan Akademik</label>
                                        <div class="col-md-12">
                                            <input name="ja" type="text" id="ja" class="form-control" value="{{ $item->ja }}">
                                            <p class="text-danger">{{ $errors->first("ja") }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mk" class="col-md-12 col-form-label text-md-left">Mata kuliah yang mampu diampu</label>
                                        <div class="col-md-12">
                                            <input name="mk" type="text" id="mk" class="form-control" value="{{ $item->mk }}">
                                            <p class="text-danger">{{ $errors->first("mk") }}</p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kmk" class="col-md-12 col-form-label text-md-left">Kesesuaian Mata Kuliah dengan bidang keahlian yang diampu</label>
                                        <div class="col-md-12">
                                            <input name="kmk" type="text" id="kmk" class="form-control" value="{{ $item->kmk }}">
                                            <p class="text-danger">{{ $errors->first("kmk") }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="spp" class="col-md-12 col-form-label text-md-left">Sertifikat Pendidik Profesional</label>
                                        <div class="col-md-12">
                                            <input name="spp" type="file" id="spp" class="form-input mt-3" value="{{ $item->spp }}">
                                            <p class="text-danger">{{ $errors->first("spp") }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="skpi" class="col-md-12 col-form-label text-md-left">Sertifikat Kompetensi Profesi Industri</label>
                                        <div class="col-md-12">
                                            <input name="skpi" type="file" id="skpi" class="form-input mt-3" value="{{ $item->skpi }}">
                                            <p class="text-danger">{{ $errors->first("skpi") }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="form-actions col-6"></div>
                            <div class="form-actions col-6 d-flex justify-content-end">
                                <button value="save" type="submit" class="btn btn-primary btn-round px-5 mr-3">Submit</button>
                                <a href="{{ route('EWMP-DTPT.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
                            </div>
                        </div>
                    </form>
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