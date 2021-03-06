<?php 
    $ci =& get_instance();;
?>

<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?> Data Training</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
                    <label for="varchar">Jenis Izin <?php echo form_error('jenis_izin') ?></label>
                    <select type="text" class="form-control" name="jenis_izin" id="jenis_izin" placeholder="Jenis izin" value="<?php echo $jenis_izin; ?>" >
                    <option value="" disabled selected>-- Pilih Jenis Izin --</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Keperluan">Keperluan Keluarga</option>
                    <option value="Bepergian">Bepergian</option>
                    <option value="Pulang Biasa">Pulang biasa</option>
                    <option value="Keluar">Keluar</option>
                    </select>
                </div>
				<div class="form-group">
                    <label for="varchar">Jarak Izin <?php echo form_error('jarak_izin') ?></label>
                    <select type="text" class="form-control" name="jarak_izin" id="jarak_izin" placeholder="Jarak izin" value="<?php echo $jarak_izin; ?>" >
                    <option value="" disabled selected>-- Pilih Jarak Izin --</option> 
                    <option value="Sangat Dekat">Sangat Dekat</option>
                    <option value="Dekat">Dekat</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Jauh">Jauh</option>
                    <option value="Sangat Jauh">Sangat Jauh</option>
                    </select>
                </div>
				<div class="form-group">
                    <label for="varchar">Durasi Izin<?php echo form_error('durasi_izin') ?></label>
                    <select type="text" class="form-control" name="durasi_izin" id="durasi_izin" placeholder="Durasi izin" value="<?php echo $durasi_izin; ?>" >
                    <option value="" disabled selected>-- Pilih Durasi Izin --</option>
                    <option value="Singkat">Singkat</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Jauh">Lama</option>
                    </select>
                </div>
				<div class="form-group">
                    <label for="varchar">Pelanggaran <?php echo form_error('pelanggaran') ?></label>
                    <select type="text" class="form-control" name="pelanggaran" id="pelanggaran" placeholder="Pelanggaran" value="<?php echo $pelanggaran; ?>" >
                    <option value="" disabled selected>-- Pilih Pelanggaran Izin --</option>
                    <option value="Pernah">Pernah</option>
                    <option value="Tidak Pernah">Tidak Pernah</option>
                    </select>
                </div>
				<div class="form-group">
                    <label for="varchar">Prediksi <?php echo form_error('prediksi') ?></label>
                    <select type="text" class="form-control" name="prediksi" id="prediksi" placeholder="Prediksi" value="<?php echo $prediksi; ?>" >
                    <option value="" disabled selected>-- Pilih Status Prediksi --</option>
                    <option value="Terlambat">Terlambat</option>
                    <option value="Tidak Terlambat">Tidak Terlambat</option>
                </div>
				<input type="hidden" name="id_data_set" value="<?php echo $id_data_set; ?>" /> 
				<button type="submit" class="btn btn-success"><?php echo $button ?></button> 
				<a href="<?php echo site_url('data_set') ?>" class="btn btn-default">Kembali</a>
			</form>
        
        </div>
    </div>
</div>