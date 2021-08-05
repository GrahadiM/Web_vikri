@extends('dosen.layouts.index')

@section('subtitle')
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
                        <h4 class="card-title">Form Create</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('HKI-TeknologiTepatGuna.store') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="pkm" class="col-md-2 col-form-label text-md-left">Luaran Penelitian dan PKM</label>
                                            <div class="col-md-10">
                                                <input name="pkm" id="pkm" class="form-control" type="text">
                                                <p class="text-danger">{{ $errors->first("pkm") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun" class="col-md-2 col-form-label text-md-left">Tahun</label>
                                            <div class="col-md-10">
                                                <input name="tahun" id="tahun" class="form-control" type="text">
                                                <p class="text-danger">{{ $errors->first("tahun") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket" class="col-md-2 col-form-label text-md-left">Keterangan</label>
                                            <div class="col-md-10">
                                                <input name="ket" id="ket" class="form-control" type="text">
                                                <p class="text-danger">{{ $errors->first("ket") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="form-actions col-6"></div>
                                <div class="form-actions col-6 d-flex justify-content-end">
                                    <button value="save" type="submit" class="btn btn-primary btn-round px-5 mr-3">Submit</button>
                                    <a href="{{ route('HKI-TeknologiTepatGuna.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
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