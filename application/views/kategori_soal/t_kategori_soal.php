<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Data Kategori Soal
                  </p>
                  <hr>
                  <form method="post" action="<?= base_url() ?>buku/simpan" class="form-horizontal" enctype="multipart/form-data">
                  <div class="box-body">
                    
                  <div class="form-group">
                    <label for="exampleInputName1">Id Kategori</label>
                    <input type="text" name="id" value="<?= $id; ?>" class="form-control" id="exampleInputName1" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="exampleInputName1" placeholder="Kategori Soal" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Nama Modul</label>
                    <select name="id_modul" class="form-control select2" id="exampleInputName1" required>

                    <option value=""> - Pilih Modul - </option>
                    <?php
                        foreach ($modul as $row) {?>
                            <option value = "<?= $row->id_modul;?>"><?= $row-> nama_modul; ?></option> 
                    <?php }
                    ?>
                </select>
            </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>kategori_soal" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>