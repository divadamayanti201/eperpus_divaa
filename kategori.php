<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                           <!--jika login sebagai admin tampilkan tombol aksi-->
                                           <?php if($_SESSION['user']['level'] == 'admin') : ?>
                                            <th>aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                     <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>novel</td>
                                            <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>roman</td>
                                            <td></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>History</td>
                                            <td></td>
                                            
                                        </tr>
                                    <tbody>
                                        <?php
                                        $i= 1;
                                        $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while($data = mysqli_fetch_array($kategori)) :

                                     ?>

                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $data['nama_kategori']; ?></td>
                                            <td>
                                            <a href="?page=kategori_ubah&id=<?= $data['id_kategori']; ?>" class="btn btn-info">ubah</a>
                                            <a href="?page=kategori_hapus&id=<?= $data['id_kategori']; ?>"  onclick="return confirm('yakin ingin menghapus data ini?')"
                                            class="btn btn-danger">hapus</a>
                                        </td>
                                            
                                        </tr>
                                        <?php endwhile; ?>

                                   
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>