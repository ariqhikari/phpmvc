<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>
            <?php foreach ($data["siswa"] as $sw) : ?>
                <ul>
                    <li><?= $sw["nama"]; ?></li>
                    <li><?= $sw["nis"]; ?></li>
                    <li><?= $sw["email"]; ?></li>
                    <li><?= $sw["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>