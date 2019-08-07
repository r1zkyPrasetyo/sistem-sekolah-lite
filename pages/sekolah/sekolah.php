<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Sekolah</h1>
            <a href="index.php?page=edit_sekolah" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-school fa-sm text-white-50"></i> Edit Data</a>
          </div>
          
          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-6">
              <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form action="">
                    <div class="form-group row">
                      <label for="NamaSekolah" class="col-md-3">Nama Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="NamaSekolah" readonly value="<?=$nama_sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamatsekolah" class="col-md-3">Alamat Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="alamatsekolah" readonly value="<?=$alamat_sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="telepon" class="col-md-3">Telepon Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="telepon" readonly value="<?=$telp_sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-md-3">Email Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="email" readonly value="<?=$email_sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="web" class="col-md-3">Web Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="web" readonly value="<?=$web_sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="url" class="col-md-3">Url Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="url" readonly value="<?=$url_sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="akreditasi" class="col-md-3">Akreditasi Sekolah</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control-plaintext" id="akreditasi" readonly value="<?=$akreditasi_Sekolah;?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="NamaSekolah" class="col-md-3">Logo Sekolah</label>
                      <div class="col-md-9">
                        <img src="<?=base_url($logo_sekolah);?>" alt="logo sekolah" class="img-fluid img-thumbnail" style="width: 100px; height:auto;">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>