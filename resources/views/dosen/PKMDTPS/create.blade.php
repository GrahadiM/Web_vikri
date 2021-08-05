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
                        <form class="form" method="POST" action="{{ route('PKM-DTPS.store') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="sumber" class="col-md-2 col-form-label text-md-left">Sumber Pembiayaan</label>
                                            <div class="col-md-10">
                                                <input name="sumber" id="sumber" class="form-control" type="text">
                                                <p class="text-danger">{{ $errors->first("sumber") }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="total_judul" class="col-md-2 col-form-label text-md-left">Jumlah Judul Penelitian</label>
                                            <div class="col-md-10">
                                                <input name="total_judul" id="total_judul" class="form-control" type="text">
                                                <p class="text-danger">{{ $errors->first("total_judul") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="form-actions col-6"></div>
                                <div class="form-actions col-6 d-flex justify-content-end">
                                    <button value="save" type="submit" class="btn btn-primary btn-round px-5 mr-3">Submit</button>
                                    <a href="{{ route('PKM-DTPS.index') }}" class="btn btn-danger btn-round px-5">Cancel</a>
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