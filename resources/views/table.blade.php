
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Judul</h3>
                                <div class="d-flex justify-content-end">
                                    <a href="" class="btn btn-sm btn-outline-primary">Create</a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Bidang Keahlian</th>
                                            <th>Rekognisi dan Bukti Pendukung</th>
                                            <th>Tingkat</th>
                                            <th>Alat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="" class="btn btn-sm btn-outline-info"> <i class="fas fa-eye"></i></a>
                                            <a href="" class="btn btn-sm btn-outline-primary"><i class="fas fa-pencil-alt"></i></a>
                                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Bidang Keahlian</th>
                                            <th>Rekognisi dan Bukti Pendukung</th>
                                            <th>Tingkat</th>
                                            <th>Alat</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->