@extends('dosen.layouts.index')

@section('subtitle')
Sistem Penjaminan Mutu <br> Fakultas Ilmu Komputer <br> Bidang Sumber Daya Manusia
@endsection

@section('content')

<div class="content">
    <div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="card shadow" style="background-color: aliceblue; border-radius: 35px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8">
                        <h3> Apa itu SI Penjaminan Mutu Fasilkom Bidang SDM?</h3>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('assets') }}/dist/img/avatar.png" alt="" width="250px">
                    </div>
                    <div class="col-sm-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat doloremque minima magni. Veritatis voluptatibus doloremque porro ab nemo. Aspernatur architecto culpa temporibus laborum? Eveniet aut ipsum saepe nulla illum architecto!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis totam autem iure assumenda! Maiores cupiditate perferendis nisi neque provident, dicta corrupti explicabo perspiciatis pariatur laboriosam consequatur placeat ut excepturi aut.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur repellat beatae, recusandae totam quia tenetur laudantium libero iste in ex reprehenderit illo eos voluptatem fugit nihil veritatis doloribus, provident porro.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae libero eaque asperiores est. Corporis, inventore vero commodi in quia dicta, facilis recusandae repellendus ea amet at asperiores nihil explicabo quam.
                    </div>
                </div>
            </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-md-9 -->
        <div class="col-lg-3">
            <h5>Kuesioner Yang Harus Diisi</h5>
            <div class="info-box" style="background-color: aliceblue;">
                <span class="info-box-icon" style="background-color: white;"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Kuesioner 1 <i class="fas fa-chevron-right text-center"></i></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box" style="background-color: aliceblue;">
                <span class="info-box-icon" style="background-color: white;"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Kuesioner 2 <i class="fas fa-chevron-right text-center"></i></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box" style="background-color: aliceblue;">
                <span class="info-box-icon" style="background-color: white;"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Kuesioner 3 <i class="fas fa-chevron-right text-center"></i></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box" style="background-color: aliceblue;">
                <span class="info-box-icon" style="background-color: white;"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">Kuesioner 4 <i class="fas fa-chevron-right text-center"></i></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col-md-3 -->
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
    </div>
    <!-- /.container-fluid -->
</div>

@endsection