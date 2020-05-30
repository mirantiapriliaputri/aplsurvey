<div class="container">

    <div class="row mt-3 mb-5">
    <div class="col-md-6"> 
    <div class="card">
        <div class="card-header">
            Form Tambah Data Pertanyaan
        </div>
        <div class="card-body">
        

        <div class="form-group">
    <label for="text">Organisasi</label>
    <select class="form-control" id="organisasi" name="organisasi">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="text">Kategori</label>
    <select class="form-control" id="kategori" name="kategori">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>


        <div class="form-group mb-4">
        <label for="text">Pertanyaan</label>
        <input type="text" name="pertanyaan" class="form-control" id="pertanyaan">
        </div>

        <div class="form-group row">
    

    <label for="inputPassword" class="col-sm-2 col-form-label">Pilihan 1</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="pilihan1">
    </div>
    <label for="inputPassword" class="col-sm-2 col-form-label">Pilihan 2</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="pilihan2">
    </div>
    <label for="inputPassword" class="col-sm-2 col-form-label">Pilihan 3</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="pilihan3">
  
      <a href="#" class="btn btn-primary btn-sm mt-3">Tambah Pilihan</a>

      
    </div>
  </div>

  
        <div class="modal-footer">
        <a href=" <?= base_url(); ?>pertanyaan" class="btn btn-secondary">Batal</a>
                 <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</div>