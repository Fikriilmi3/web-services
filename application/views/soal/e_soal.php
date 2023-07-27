<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Edit Soal
                  </p>
                  <hr>
                  <form method="post" action="<?= base_url()?>soal/update">
                <div class="form-group">
                    <label for="exampleInputName1">Id Soal</label>
                    <input type="text" name="id" value="<?= $data['id'];?>"class="form-control" readonly>
                </div>
       
                <div class="form-group">
                <label for="exampleInputName1">Kategori Soal</label>
                    <select name="id_kategori" class="form-control select2" id="exampleInputName1" required>

                    <?php
                        foreach ($kategori_soal as $row) {
                            if ($data['id_kategori'] == $row->id_kategori) {?>
                                <option value="<?= $row->id;?>" selected><?= $row->nama_kategori; ?> </option>
                    <?php } else{?>
                        <option value="<?= $row->id;?>" ><?= $row->nama_kategori; ?> </option>
                        <?php }
                        }
                    ?>
                    </select>
                </div>

                <div class="form-group">
                <label for="exampleInputName1">Kategori Umur</label>
                    <select name="id_umur" class="form-control select2" id="exampleInputName1" required>

                    <?php
                        foreach ($umur as $row) {
                            if ($data['id_umur'] == $row->id_umur) {?>
                                <option value="<?= $row->id;?>" selected><?= $row->umur; ?> </option>
                    <?php } else{?>
                        <option value="<?= $row->id;?>" ><?= $row->umur; ?> </option>
                        <?php }
                        }
                    ?>
                    </select>
                </div>

                <div class="form-group">
                <label for="exampleInputName1">No Pertanyaan</label>
                    <input type="text" name="no_pertanyaan" value="<?= $data['no_pertanyaan'];?>" class="form-control" id="exampleInputName1" placeholder="No Pertanyaan" required>
                </div>

                <div class="form-group">
                <label for="exampleInputName1">Pertanyaan</label>
                    <input type="text" name="pertanyaan" value="<?= $data['pertanyaan'];?>" class="form-control" id="exampleInputName1" placeholder="Pertanyaan" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="exampleInputName1" accept="image/*" >
                        <img src="<?= base_url()?>assets/buku/gambar/<?= $data['gambar'];?>" alt="" width="200">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>soal" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
              </div>
            </div>