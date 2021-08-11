@extends('admin.layouts.index')

@section('subtitle')
Update Akun
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
                        <h4 class="card-title">Update Akun</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text"></p>
                        <form class="form" method="POST" action="{{ route('akun.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-left">Nama</label>
                                            <div class="col-md-10">
                                                <input name="name" id="name" class="form-control" type="text" value="{{ $user->name }}">
                                                <p class="text-danger">{{ $errors->first("name") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-md-2 col-form-label text-md-left">Nomer Handphone</label>
                                            <div class="col-md-10">
                                                <input name="phone" type="text" id="phone" class="form-control" value="{{ $user->phone }}">
                                                <p class="text-danger">{{ $errors->first("phone") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nidn" class="col-md-2 col-form-label text-md-left">NIDN/NIDK</label>
                                            <div class="col-md-10">
                                                <input name="nidn" type="text" id="nidn" class="form-control" value="{{ $user->nidn }}">
                                                <p class="text-danger">{{ $errors->first("nidn") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gender" class="col-md-2 col-form-label text-md-left">Jenis Kelamin</label>
                                            <div class="col-md-10">
                                                <select name="gender" class="form-control">
                                                    <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                                <p class="text-danger">{{ $errors->first("gender") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="desc" class="col-md-2 col-form-label text-md-left">Deskripsi</label>
                                            <div class="col-md-10">
                                                <select name="desc" class="form-control">
                                                    <option value="{{ $user->desc }}">{{ $user->desc }}</option>
                                                    <option value="Dosen Tetap">Dosen Tetap</option>
                                                    <option value="Dosen Tidak Tetap">Dosen Tidak Tetap</option>
                                                </select>
                                                <p class="text-danger">{{ $errors->first("desc") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-2 col-form-label text-md-left">E-mail Address</label>
                                            <div class="col-md-10">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Email"  value="{{ $user->email }}">
                                                <p class="text-danger">{{ $errors->first("email") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="username" class="col-md-2 col-form-label text-md-left">Username</label>
                                            <div class="col-md-10">
                                                <input name="username" id="username" type="username" class="form-control" placeholder="username"  value="{{ $user->username }}">
                                                <p class="text-danger">{{ $errors->first("username") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-2 col-form-label text-md-left">Password</label>
                                            <div class="col-md-10">
                                                <input value="{{ $user->password }}" name="password" id="password" type="password" class="form-control" placeholder="Masukkan password">
                                                <p class="text-danger">{{ $errors->first("password") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-2 col-form-label text-md-left">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-10">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 d-flex justify-content-center">
                                        <div class="form-group">
                                            <label for="image">Masukkan Foto Profile</label>
                                            <input name="image" type="file" class="form-control-file" id="image">
                                            <img alt="image" src="{{ asset('img/profile/' . $user->image) }}" class="img-fluid" style="width: 200px; margin-top: 1rem;">
                                            <p class="text-danger">{{ $errors->first("image") }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="form-actions col-6"></div>
                                <div class="form-actions col-6 d-flex justify-content-end">
                                    <button value="save" type="submit" class="btn btn-primary btn-round px-5 mr-3">Submit</button>
                                    <a href="{{ url('/akun') }}" class="btn btn-danger btn-round px-5">Cancel</a>
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
