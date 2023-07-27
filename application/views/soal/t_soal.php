<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">Perpustakaan BPS Kota Malang</h3>
                  <p class="card-description">
                    Form Data Buku
                  </p>
                  <hr>
            <form method="post" action="<?= base_url() ?>buku/simpan" class="form-horizontal" enctype="multipart/form-data">
            <div class="box-body">

            <div class="form-group">
                <label for="exampleInputName1">Id Buku</label>
                    <input type="text" name="id_buku" value="<?= $id_buku; ?>" class="form-control" id="exampleInputName1" readonly>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="exampleInputName1" placeholder="Judul Buku" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">ISSN</label>
                    <input type="text" name="issn" class="form-control" id="exampleInputName1" placeholder="ISSN" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">No Publikasi</label>
                    <input type="text" name="no_publikasi" class="form-control" id="exampleInputName1" placeholder="No Publikasi" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">No Katalog</label>
                    <input type="text" name="no_katalog" class="form-control" id="exampleInputName1" placeholder="No Katalog" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Ukuran Buku</label>
                    <input type="text" name="ukuran_buku" class="form-control" id="exampleInputName1" placeholder="Ukuan Buku" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Jumlah Halaman Buku</label>
                    <input type="text" name="halaman" class="form-control" id="exampleInputName1" placeholder="Jumlah Halaman" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Naskah</label>
                    <input type="text" name="naskah" class="form-control" id="exampleInputName1" placeholder="Naskah" required>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Penyunting</label>
                    <select name="id_penyunting" class="form-control select2" id="exampleInputName1" required>

                    <option value=""> - Pilih Penyunting - </option>
                    <?php
                        foreach ($penyunting as $row) {?>
                            <option value = "<?= $row->id_penyunting;?>"><?= $row-> nama_penyunting; ?></option> 
                    <?php }
                    ?>
                </select>
            </div>
               
            <div class="form-group">
                <label for="exampleInputName1">Penerbit</label>
                    <select name="id_penerbit" class="form-control select2" id="exampleInputName1" required>

                    <option value=""> - Pilih Penerbit - </option>
                    <?php
                        foreach ($penerbit as $row) {?>
                            <option value = "<?= $row->id_penerbit;?>"><?= $row-> nama_penerbit; ?></option> 
                    <?php }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Foto Buku</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputName1" accept="image/*" required>
            </div>


               <div class="box-footer">
               <button type="submit" class="btn btn-primary"><i class="fa fa-save (alias)"></i> Simpan</button>
               <a href="<?=base_url() ?>buku" class="btn btn-danger"> <i class="fa fa-times"></i> Cancel</a>
                   
            </div>
</form>
                </div>
              </div>
            </div>