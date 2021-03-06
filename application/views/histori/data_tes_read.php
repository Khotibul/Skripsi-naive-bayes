<?php 
    $ci =& get_instance();
?>

<div class="content">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5 class="panel-title">Data_tes Detail</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
        
            <table class="table">
				<tr>
                    <td>Id Santri</td><td><?php echo $id_santri; ?></td>
                </tr>
				<tr>
                    <td>Id User</td><td><?php echo $id_user; ?></td>
                </tr>
				<tr>
                    <td>Tanggal</td><td><?php echo $tanggal; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td><td><?php echo $tanggal_kembali; ?></td>
                </tr>
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
                <tr>
                    <td>Kenyataan</td><td><?php echo $kenyataan; ?></td>
                </tr>
                <tr>
                    <td>Konfirmasi Izin</td><td><?php echo $konfirmasi; ?></td>
                </tr>
                    <td><a href="<?php echo site_url('data_tes') ?>" class="btn btn-primary">Kembali</a></td><td></td>
                    <div class="col-md-5 text-left">
                    <button type="button" class="btn btn-sm btn-danger" onclick="printHistori()"><i class="icon-file-pdf"></i> Cetak</button>
				</div>
                </tr>
			</table>
       
       </div>

    </div>
</div>

<script type="text/javascript">

function printHistori() {
        var alamat = '<?php echo base_url();?>' + 'dashboard/cetak_histori';
        var printHistoriWindow = window.open(alamat, 'Rekap Histori', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes');
        printHistoriWindow.print();   
        return false;
}