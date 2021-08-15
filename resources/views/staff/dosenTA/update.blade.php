@extends('staff.layouts.index')

@section('subtitle')
Update Dosen TA
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
                        <h4 class="card-title">Update Dosen Tetap</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text"></p>
                        <form class="form" method="POST" action="{{ route('dosenPembimbingTA.update', $dosen->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        @if (auth()->user()->role_id != 3)
                                        <div class="form-group row">
                                            <label for="user_id" class="col-md-2 col-form-label text-md-left">Nama Dosen</label>
                                            <div class="col-md-10">
                                                <select name="user_id" class="form-control">
                                                    <option value="{{ $dosen->user->id }}">{{ $dosen->user->name }}</option>
                                                    {{-- @foreach ($users as $user)
                                                    @if ($user->id == auth()->user()->id)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endif
                                                    @endforeach --}}
                                                </select>
                                                <p class="text-danger">{{ $errors->first("user_id") }}</p>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group row">
                                            <label for="total_mahasiswa" class="col-md-2 col-form-label text-md-left">Jumlah Mahasiswa yang dibimbing</label>
                                            <div class="col-md-10">
                                                <input name="total_mahasiswa" id="total_mahasiswa" class="form-control" type="text" value="{{ $dosen->total_mahasiswa }}">
                                                <p class="text-danger">{{ $errors->first("total_mahasiswa") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="form-actions col-6"></div>
                                <div class="form-actions col-6 d-flex justify-content-end">
                                    <button value="save" type="submit" class="btn btn-primary btn-round px-5 mr-3">Submit</button>
                                    <a href="{{ route('dosenPembimbingTA.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
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