@extends('admin.layouts.index')

@section('subtitle')
List Data Kuesioner
@endsection

@section('content')


<div class="content">
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="d-flex justify-content-center mb-3">
                <h3>Menu Staff</h3>
              </div>  
              <div class="card">
                <div class="card-body">
                  <a href="{{ route('dosenTetap.index') }}">Dosen Tetap</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="{{ route('dosenTidakTetap.index') }}">Dosen Tidak Tetap</a>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="{{ route('dosenPembimbingTA.index') }}">Dosen Pembimbing Utama Tugas Akhir</a>
                </div>
              </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-lg-8">
            <div class="d-flex justify-content-center mb-3">
              <h3>Menu Dosen</h3>
            </div>
            <div class="row">
              <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('EWMP-DTPT.index') }}">Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('Pengakuan-DTPS.index') }}">Pengakuan/Rekognisi DTPS</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('Penelitian-DTPS.index') }}">Penelitian DTPS</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('PKM-DTPS.index') }}">Pengabdian kepada Masyarakat (PKM) DTPS</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('Publikasi-IlmiahDTPS.index') }}">Publikasi Ilmiah DTPS</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('Karya-IlmiahDTPS.index') }}">Karya Ilmiah DTPS yang disitasi dalam 3 tahun terakhir</a>
                    </div>
                  </div>
              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-6">
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('Jasa-DTPS.index') }}">Produk/Jasa DTPS yang diadopsi oleh Industri/Masyarakat</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('HKI-HakPaten.index') }}">Hak Kekayaan Intelektual (Hak Paten/Paten Sederhana)</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('HKI-HakCipta.index') }}">Hak Kekayaan Intelektual (Hak Cipta, Desain Produk Industri, dll)</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('HKI-TeknologiTepatGuna.index') }}">Hak Kekayaan Intelektual (Teknologi Tepat guna, Produk, Karya seni)</a>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('HKI-BukuBerISBN.index') }}">Hak Kekayaan Intelektual (Buku Ber-ISBN, Book Chapter)</a>
                    </div>
                  </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
          </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection