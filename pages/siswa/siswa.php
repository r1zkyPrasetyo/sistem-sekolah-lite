<?php  
$querySiswa = "SELECT * FROM siswa";
$sqlSiswa = mysqli_query($conn, $querySiswa)or die(mysqli_error($conn));


?>


 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sistem Sekolah Lite - Siswa/i</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
          
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card shadow-sm h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Anak Laki-Laki</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">200 Siswa</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-male fa-4x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card shadow-sm h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Anak Perempuan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">215 siswa</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-female fa-4x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card shadow-sm h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Siswa</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">415 siswa</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-4x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Murid Aktif</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive-md table-responsive-sm">
                    <table id="table1" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>N0</th>
                          <th>NIS</th>
                          <th>NISN</th>
                          <th>Nama</th>
                          <th>Tanggal Lahir</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                        $no = 1;
                        while($data = mysqli_fetch_assoc($sqlSiswa)):
                        ?>
                          <tr>
                            <td class="text-center"><?=$no++;?></td>
                            <td><?=$data['nis'];?></td>
                            <td><?=$data['nisn'];?></td>
                            <td><?=$data['nama'];?></td>
                            <td><?=$data['tanggal_lhr'];?></td>
                            <td>
                              <a href="#" class="btn btn-success btn-sm">Detail</a>
                              <a href="#" class="btn btn-primary btn-sm">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                        <?php  
                        endwhile;
                        ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

          </div>
