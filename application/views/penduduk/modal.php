<!-- Tambah Data Penduduk -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Penduduk</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=base_url()?>penduduk/insertPenduduk" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="nik">NIK</label>
                  <input class="form-control" type="text" name="nik" placeholder="NIK" required>
            </div>
            <div class="form-group">
                  <label for="nama">Nama</label>
                  <input class="form-control" type="text" name="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
                  <label for="tempatLahir">Tempat Lahir</label>
                  <input class="form-control" type="text" name="tempatLahir" placeholder="Tempat Lahir" required>
            </div>
            <div class="form-group">
                  <label for="tanggalLahir">Tanggal Lahir</label>
                  <input class="form-control" type="date" name="tanggalLahir" placeholder="Tanggal Lahir" required>
            </div>
            <div class="form-group">
                  <label class="radio-inline">
                      <input type="radio" name="jenisKelamin" value="Laki-Laki">Laki-Laki
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="jenisKelamin" value="Perempuan">Perempuan
                  </label>
            </div>
            <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" name="alamat" required>
                  </textarea>
            </div>
            <div class="form-group">
                  <label for="gambar">Image</label>
                  <input class="form-control" type="file" name="gambar">
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Insert</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Edit Data Penduduk -->
<div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Penduduk</h4>
      </div>
      <div class="modal-body">
      <div class="view-image text-center"></div><br/>
        <form method="post" action="<?=base_url()?>penduduk/editPenduduk" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="nik">NIK</label>
                  <input class="form-control nik" type="text" name="nik" required>
            </div>
            <div class="form-group">
                  <label for="nama">Nama</label>
                  <input class="form-control nama" type="text" name="nama" required>
            </div>
            <div class="form-group">
                  <label for="tempatLahir">Tempat Lahir</label>
                  <input class="form-control tempatLahir" type="text" name="tempatLahir" required>
            </div>
            <div class="form-group">
                  <label for="tanggalLahir">Tanggal Lahir</label>
                  <input class="form-control tanggalLahir" type="date" name="tanggalLahir" required>
            </div>
            <div class="form-group">
                  <label class="radio-inline laki-laki">
                      <input id="lakilaki" type="radio" name="jenisKelamin" value="Laki-Laki">Laki-Laki
                  </label>
                  <label class="radio-inline">
                      <input id="perempuan" type="radio" name="jenisKelamin" value="Perempuan">Perempuan
                  </label>
            </div>
            <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <div class="alamat"></div>
            </div>
            <div class="form-group">
                <label for="gambar">Image</label>
                <input class="form-control" type="file" name="gambar">
            </div>
            
      </div>
      <div class="modal-footer">
        <input class="id" type="hidden" name="id">
        <input class="path" type="hidden" name="path">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Hapus Data Penduduk -->
<div class="modal fade" id="hapusDataModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data Penduduk</h4>
      </div>
      <div class="modal-body">

          <div class="view-image text-center"></div><br/>
          <div class="text-delete"></div>
            
      </div>
      <div class="modal-footer">
        <form method="post" action="<?=base_url()?>penduduk/hapusPenduduk">
            <input class="id" type="hidden" name="id">
            <input class="path" type="hidden" name="path">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>




