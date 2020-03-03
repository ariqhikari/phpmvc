<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
                Tambah data siswa
            </button>
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach ($data["siswa"] as $sw) : ?>
                    <li class="list-group-item">
                        <?= $sw["nama"]; ?>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $sw["id"]; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $sw["id"]; ?>" class="badge badge-primary float-right ml-1">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/siswa/tambah" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option>Jurusan</option>
                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Teknik Otomasi Industri">Teknik Otomasi Industri</option>
                            <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                            <option value="Audio Video">Audio Video</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="button">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>