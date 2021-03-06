<?php 
    $ci =& get_instance();;
?>

<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?> Data_tes</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
                    <label for="int">Id Santri <?php echo form_error('id_santri') ?></label>
                    <input type="text" class="form-control" name="id_santri" id="id_santri" placeholder="Id Santri" value="<?php echo $id_santri; ?>" />
                </div>
				<div class="form-group">
                    <label for="int">Id User <?php echo form_error('id_user') ?></label>
                    <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                </div>
				<div class="form-group">
                    <label for="date">Tanggal izin<?php echo form_error('tanggal') ?></label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
                </div>
                <div class="form-group">
                    <label for="date">Tanggal Kembali<?php echo form_error('tanggal_kembali') ?></label>
                    <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="Tanggal_kembali" value="<?php echo $tanggal_kembali; ?>" />
                </div>

                <div class="form-group">
                    <label for="varchar">Konfirmasi Izin <?php echo form_error('konfirmasi') ?></label>
                    <select type="text" class="form-control" name="konfirmasi" id="konfirmasi" placeholder="Konfirmasi" value="<?php echo $konfirmasi; ?>" >
                    <option value="" disabled selected>-- Pilih Status Konfirmasi Izin --</option>
                    <option value="Izin diterima">Diterima</option>
                    <option value="Izin ditolak">Ditolak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="varchar">Kenyataan <?php echo form_error('kenyataan') ?></label>
                    <select type="text" class="form-control" name="kenyataan" id="kenyataan" placeholder="Kenyataan" value="<?php echo $kenyataan; ?>" >
                    <option value="" disabled selected>-- Pilih Status Kenyataan --</option>
                    <option value="Terlambat">Terlambat</option>
                    <option value="Tidak Terlambat">Tidak Terlambat</option>
                    </select>
                </div>
				<input type="hidden" name="id_data_tes" value="<?php echo $id_data_tes; ?>" /> 
				<button type="submit" class="btn btn-success" value="Simpan" onclick ="return simulasi()"><?php echo $button ?></button> 
				<a href="<?php echo site_url('data_tes_list') ?>" class="btn btn-default">Kembali</a>
			</form>
             </div>
        </div>
    </div>
</div>