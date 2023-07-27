<div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
              <form method="post" action="<?= base_url()?>umur/simpan">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Data Umur
                  </p>
                  <hr>
                  <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $id;?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Kategori Umur</label>
                    <input type="text" name="umur" class="form-control" placeholder="Input Kategori Umur" required>
                </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>umur" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>

            