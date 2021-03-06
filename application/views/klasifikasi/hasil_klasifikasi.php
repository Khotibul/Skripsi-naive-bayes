<?php 
    $ci =& get_instance();
?>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>"></script>

<div class="content">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Hasil Klasifikasi</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td colspan="3">DEATIL</td>
                        <td>
                        <tr>
                            <td>Nama Santri</td> <td width="100px" align="center"> : </td><td><?php echo $nama_santri ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td width="100px" align="center"> : </td><td><?php echo $tanggal ?></td>
                        </tr>
                    </table> 
                    <br>
                    <br>
                    <table class="table datatable-responsive table-sm table-bordered" id="mytable">
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Value</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jenis Izin </td>
                                <td><?= $jenis_izin?></td>
                                <td><?= round((float)$jenis_izin) ?></td>
                            </tr>
                            <tr>
                                <td>Jarak Izin</td>
                                <td><?= $jarak_izin?></td>
                                <td><?= round((float)$jarak_izin) ?></td>
                            </tr>
                            <tr>
                                <td>Durasi Izin</td>
                                <td><?= $durasi_izin?></td>
                                <td><?= round((float)$durasi_izin) ?></td>
                            </tr>
                            <tr>
                                <td>pelanggaran</td>
                                <td><?= $pelanggaran?></td>
                                <td><?= round((float)$pelanggaran) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4>Probabilitas Terlambat = <?=$prob_terlambat?></h4>
                    <h4>Presentase Probabilitas Terlambat = <?= round((float)$prob_terlambat * 33.5 )?>  %</h4>
                    <h4>Probabilitas Tidak Terlambat = <?=$prob_tepat?></h4>
                    <h4>Presentase Probabilitas Tidak Terlambat = <?= round((float)$prob_tepat * 33.5 )?>  %</h4>
                    
                    <center><h1>Prediksi <?= $prediksi ?></h1>
                    <h1>Akurasi <?= $akurasi ?></h1>
                    <br><br>
                    <a class="btn btn-md btn-primary" href="<?= base_url('Klasifikasi')?>">Back</a>
                    <br>
                    <form action="<?php echo $action; ?>" method="post">
                        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
                        <input type="hidden" name="nama_santri" value="<?php echo $nama_santri; ?>" />
                        <input type="hidden" name="id_santri" value="<?php echo $id_santri; ?>" />
                        <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>" />

                        <input type="hidden" name="jenis_izin" value="<?php echo $jenis_izin; ?>" />
                        <input type="hidden" name="jarak_izin" value="<?php echo $jarak_izin; ?>" />
                        <input type="hidden" name="durasi_izin" value="<?php echo $durasi_izin; ?>" />
                        <input type="hidden" name="pelanggaran" value="<?php echo $pelanggaran; ?>" />
                        <input type="hidden" name="prediksi" value="<?php echo $prediksi; ?>" />
                        <input type="hidden" name="akurasi" value="<?php echo $akurasi; ?>" />
                        
                        <br>

                        <button class="btn btn-md btn-success" type="submit">Simpan</button>
                    </form>
                    </center>
                </div>            
        </div>

    </div>
</div>