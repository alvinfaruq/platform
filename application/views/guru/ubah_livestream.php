<div class="container">

    <div class="row mb-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Livestream
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3" style="display: none;">
                            <label for="idmatapelajaran" class="form-label">Mata Pelajaran</label>
                            <input type="number" name="idmatapelajaran" class="form-control" id="idmatapelajaran" value="<?= $livestream['id']; ?>">
                            <div class="form-text text-danger"><?= form_error('idmatapelajaran'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="idkelas" class="form-label">Kelas</label>
                            <!-- <input type="text" name="idkelas" class="form-control" id="idkelas" value=""> -->
                            <select class="form-control" name="idkelas" id="idkelas" <?= $livestream['idkelas']; ?>>
                                <?php foreach($kelas as $val){ ?>
                                    <option value="<?= $val['idkelas'] ?>" <?= $livestream['idkelas']==$val['idkelas']?'selected':'' ?>><?= $val['namakelas'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="form-text text-danger"><?= form_error('idkelas'); ?></div>
                        </div>

                        <div class="mb-3">
                            <label for="idmatapelajaran" class="form-label">Mata Pelajaran</label>
                            <select class="form-control" name="idmatapelajaran" id="idmatapelajaran">
                                <?php foreach($matapelajaran as $val){ ?>
                                    <option value="<?= $val['id'] ?>" <?= $livestream['id_livestream']==$val['id']?'selected':'' ?>><?= $val['nama'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="waktumulai" class="form-label">Waktu Mulai</label>
                            <input type="datetime-local" name="waktumulai" class="form-control" id="waktumulai" value="<?= $livestream['waktumulai']; ?>">
                            <div class="form-text text-danger"><?= form_error('waktumulai'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="waktuselesai" class="form-label">Waktu Selesai</label>
                            <input type="datetime-local" name="waktuselesai" class="form-control" id="waktuselesai" value="<?= $livestream['waktuselesai']; ?>">
                            <div class="form-text text-danger"><?= form_error('waktuselesai'); ?></div>
                        </div>
                        <div class="mb-3" style="display: none;">
                            <label for="video" class="form-label">Video</label>
                            <input type="text" name="video" class="form-control" id="video" value="<?= $livestream['video']; ?>">
                            <div class="form-text text-danger"><?= form_error('video'); ?></div>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data Livestream</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>