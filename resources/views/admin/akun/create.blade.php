@extends('admin.layouts.index')

@section('subtitle')
Create Account
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Create Account') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('akun.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="{{ __('Masukan Nama') }}" autofocus>
                                <p class="text-danger">{{ $errors->first("name") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="{{ __('Masukan Email') }}">
                                <p class="text-danger">{{ $errors->first("email") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" placeholder="{{ __('Masukan username') }}">
                                <p class="text-danger">{{ $errors->first("username") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nidn" class="col-md-4 col-form-label text-md-right">{{ __('NIDN / NIDK') }}</label>
                            <div class="col-md-6">
                                <input id="nidn" type="number" class="form-control" name="nidn" placeholder="Masukan NIDK / NIDK">
                                <p class="text-danger">{{ $errors->first("nidn") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control" name="birthday" placeholder="{{ __('Tanggal-Bulan-Tahun ') }}">
                                <p class="text-danger">{{ $errors->first("birthday") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select id="gender" class="form-control" name="gender" value="{{ old('gender') }}" aria-label="Default select example">
                                    <option value="" selected disabled>Open this select your gender</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                                <p class="text-danger">{{ $errors->first("gender") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                            <div class="col-md-2 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role_id" id="role_id" value="1">
                                    <label class="form-check-label" for="role_id">
                                        {{ __('Admin') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role_id" id="role_id" value="2">
                                    <label class="form-check-label" for="role_id">
                                        {{ __('Staff') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role_id" id="role_id" value="3" checked>
                                    <label class="form-check-label" for="role_id">
                                        {{ __('Dosen') }}
                                    </label>
                                </div>
                            </div>
                            <p class="text-danger">{{ $errors->first("role_id") }}</p>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                                <p class="text-danger">{{ $errors->first("name") }}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"assword">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection