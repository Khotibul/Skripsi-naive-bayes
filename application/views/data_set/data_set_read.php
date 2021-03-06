<?php 
    $ci =& get_instance();
?>

<div class="content">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5 class="panel-title">Data_set Detail</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body"> 
        <table class="table">
				<tr>
                    <td>Jenis Izin</td><td><?php echo $jenis_izin; ?></td>
                </tr>
				<tr>
                    <td>Jarak Izin</td><td><?php echo $jarak_izin; ?></td>
                </tr>
				<tr>
                    <td>Durasi Izin</td><td><?php echo $durasi_izin; ?></td>
                </tr>
				<tr>
                    <td>Pelanggaran</td><td><?php echo $pelanggaran; ?></td>
                </tr>
				<tr>
                    <td>Prediksi</td><td><?php echo $prediksi; ?></td>
                </tr>
                    <td><a href="<?php echo site_url('data_set') ?>" class="btn btn-primary">kembali</a></td><td></td>
                </tr>
			</table>

       
       </div>

    </div>
</div>