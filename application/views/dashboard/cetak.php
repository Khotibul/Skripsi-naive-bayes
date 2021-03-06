<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    </head>
    <body>
	   <br><hr>
       <center><h1 class="panel-title">Rekap Histori</h1></center>
	   <hr><br>
       <table class="table table-sm table-bordered">
                <thead>
                    <tr>
					<th width="50px">No</th>
						<th>Nama Santri</th>
                        <th>Tanggal Izin</th>
                        <th>Jenis Izin</th>
						<th>jarak izin</th>
						<th>durasi izin</th>
						<th>Pelanggaran</th>
						<th>Prediksi</th>
                    </tr>
                </thead>
				<tbody>
            <?php
                $start = 0;
                foreach ($dashboard_data as $data_tes1)
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
                        <td><?php echo $this->Desa_model->get_by_id($data_tes1->id_santri)->nama_santri ?></td>
						<td><?php echo $data_tes1->tanggal ?></td>
						<td><?php echo $data_tes1->jenis_izin ?></td>
						<td><?php echo $data_tes1->jarak_izin ?></td>
						<td><?php echo $data_tes1->durasi_izin ?></td>
						<td><?php echo $data_tes1->pelanggaran ?></td>
						<td><?php echo $data_tes1->prediksi ?></td>
						
					</tr>
            <?php
                }
            ?>
                </tbody>
            </table>
    </body>
</html>