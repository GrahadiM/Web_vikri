@extends('staff.layouts.index')

@section('subtitle')
Show Dosen Tidak Tetap
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title">Show Dosen Tetap</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text"></p>
                        <form class="form" method="POST" action="{{ route('dosenTidakTetap.store') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        @if (auth()->user()->role_id != 3)
                                        <div class="form-group row">
                                            <label for="user_id" class="col-md-2 col-form-label text-md-left">Nama Dosen</label>
                                            <div class="col-md-10">
                                                <select disabled name="user_id" class="form-control">
                                                    <option value="{{ $dosen->user->id }}">{{ $dosen->user->name }}</option>
                                                </select>
                                                <p class="text-danger">{{ $errors->first("user_id") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="user_id" class="col-md-2 col-form-label text-md-left">NIDN</label>
                                            <div class="col-md-10">
                                                <input disabled id="nidn" class="form-control" type="text" value="{{ $dosen->user->nidn }}">
                                                <p class="text-danger">{{ $errors->first("user_id") }}</p>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row">
                                            <label for="pps" class="col-md-2 col-form-label text-md-left">Pendidikan Pasca Sarjana</label>
                                            <div class="col-md-10">
                                                <input disabled name="pps" id="pps" class="form-control" type="text" value="{{ $dosen->pps }}">
                                                <p class="text-danger">{{ $errors->first("pps") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="bk" class="col-md-2 col-form-label text-md-left">Bidang Keahlian</label>
                                            <div class="col-md-10">
                                                <input disabled name="bk" id="bk" class="form-control" type="text" value="{{ $dosen->bk }}">
                                                <p class="text-danger">{{ $errors->first("bk") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ja" class="col-md-2 col-form-label text-md-left">Jabatan Akademik</label>
                                            <div class="col-md-10">
                                                <input disabled name="ja" id="ja" class="form-control" type="text" value="{{ $dosen->ja }}">
                                                <p class="text-danger">{{ $errors->first("ja") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mk" class="col-md-2 col-form-label text-md-left">Mata Kuliah yang mampu diampu</label>
                                            <div class="col-md-10">
                                                <input disabled name="mk" id="mk" class="form-control" type="text" value="{{ $dosen->mk }}">
                                                <p class="text-danger">{{ $errors->first("mk") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kmk" class="col-md-2 col-form-label text-md-left">Kesesuaian Mata Kuliah dengan bidang keahlian yang diampu</label>
                                            <div class="col-md-10">
                                                <input disabled name="kmk" id="kmk" class="form-control" type="text" value="{{ $dosen->kmk }}">
                                                <p class="text-danger">{{ $errors->first("kmk") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="spp" class="col-md-12 col-form-label text-md-left">Sertifikat Pendidik Profesional</label>
                                            <div class="col-md-12">
                                                {{-- <input disabled name="spp" type="file" id="spp" class="form-input mt-3" value="{{ $dosen->spp }}"> --}}
                                                <a href="{{ url('file/spp', $dosen->spp) }}" target="_blank" rel="noopener noreferrer">
                                                    <p>{{ $dosen->spp }}</p>
                                                </a>
                                                <p class="text-danger">{{ $errors->first("spp") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label for="skpi" class="col-md-12 col-form-label text-md-left">Sertifikat Kompetensi Profesi Industri</label>
                                            <div class="col-md-12">
                                                {{-- <input disabled name="skpi" type="file" id="skpi" class="form-input mt-3" value="{{ $dosen->skpi }}"> --}}
                                                <a href="{{ url('file/skpi', $dosen->skpi) }}" target="_blank" rel="noopener noreferrer">
                                                    <p>{{ $dosen->skpi }}</p>
                                                </a>
                                                {{-- <embed type="application/pdf" src="{{ asset('file/skpi')."/".$dosen->skpi}}" width="500" height="300"> --}}
                                                <p class="text-danger">{{ $errors->first("skpi") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="form-actions col-6"></div>
                                <div class="form-actions col-6 d-flex justify-content-end">
                                    {{-- <button value="save" type="submit" class="btn btn-primary btn-round px-5 mr-3">Submit</button> --}}
                                    <a href="{{ route('dosenTidakTetap.edit', $dosen->id) }}" class="btn btn-primary btn-round px-5 mr-3">Update</a>
                                    <a href="{{ route('dosenTidakTetap.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection