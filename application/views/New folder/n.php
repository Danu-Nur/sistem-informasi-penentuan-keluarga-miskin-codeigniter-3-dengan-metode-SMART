<div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="ID_PENDUDUK">NAMA PENDUDUK</label>
                </div>
              <select class="custom-select <?php echo form_error('ID_PENDUDUK') ? 'is-invalid':'' ?>" name="ID_PENDUDUK"> 
                  <option selected>Pilih...</option>
                  <?php foreach ($data_penduduk as $dp): ?>
                  <option value="<?php echo $dag->ID_PENDUDUK ?>"><?php echo $dp->NAMA_PENDUDUK ?></option>
                  <?php endforeach; ?>
                </select>
              </div>