<?php 
    $ci =& get_instance();
?>

<script src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>"></script>

<div class="content">
<div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Data Akurasi</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>
            <div class="row">
                <div class="col-md-7 text-center">
                    <div style="margin-top: 4px"  id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
            </div>          
            <br>
            <table class="table datatable-responsive table-sm table-striped" id="mytable">
                <thead>
                    <tr>
                        <th >Akurasi Benar</th>
                        <th >Akurasi Tidak Benar</th>
                    </tr>
                </thead>
				<tbody>
                <tr>
                    <td><?php echo $Benar?></td>
                    <td><?php echo $Tidak_Benar?></td>
                    </tr>
                </tbody>
            </table>
                
<div class="content">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Data Santri Sementara</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
            <div class="row">
            <div class="col-md-5 text-left">
                    <?php echo anchor(site_url('klasifikasi/hitung_klasifikasi1'), '<i class="fa fa-plus-square"></i> Tambah data uji coba', 'class="btn btn-default btn-xs" data-popup="tooltip-custom" title="tambah data"'); ?>
				</div>
                <div class="col-md-7 text-center">
                    <div style="margin-top: 4px"  id="message">
                        <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                    </div>
                </div>
            </div>          
            <br>
            <table class="table datatable-responsive table-sm table-striped" id="mytable">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th width="20px">ID Santri</th>
						<th>Nama Santri</th>
						<th>Tanggal Izin</th>
                        <th>Tanggal Kembali</th>
						<th>Jenis Izin</th>
						<th>Jarak Izin</th>
						<th>Durasi Izin</th>
						<th>Pelanggaran</th>
						<th>Prediksi</th>
                        <th>Akurasi Prediksi</th>
                        <th>Konfirmasi Izin</th>
                        <th>Kenyataan</th>

                    </tr>
                </thead>
				<tbody>
                
            <?php
                $start = 0;
                foreach ($data_tes_data as $data_tes)
                
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
                        <td><?php echo $this->Desa_model->get_by_id($data_tes->id_santri)->id_santri ?></td>
                        <td><?php echo $this->Desa_model->get_by_id($data_tes->id_santri)->nama_santri ?></td>
                        <td><?php echo $data_tes->tanggal ?></td>
                        <td><?php echo $data_tes->tanggal_kembali ?></td>
						<td><?php echo $data_tes->jenis_izin ?></td>
						<td><?php echo $data_tes->jarak_izin ?></td>
						<td><?php echo $data_tes->durasi_izin ?></td>
						<td><?php echo $data_tes->pelanggaran ?></td>
						<td><?php echo $data_tes->prediksi ?></td>
                        <td><?php echo $data_tes->akurasi ?></td>
                        <td><?php echo $data_tes->konfirmasi ?></td>
                        <td><?php echo $data_tes->kenyataan ?></td>
						<td style="text-align:center" width="200px">
						<?php 
                           echo anchor(site_url('data_tes/read/'.$data_tes->id_data_tes),'Detail'); 
                           echo ' | '; 
                           echo anchor(site_url('data_tes/update/'.$data_tes->id_data_tes),'Uji Coba'); 
                           echo ' | '; 
                           echo anchor(site_url('data_tes/create/'.$data_tes->id_data_tes),'Ubah'); 
                           echo ' | '; 
                           echo anchor(site_url('data_tes/delete/'.$data_tes->id_data_tes),'Hapus','onclick="javasciprt: return confirm(\'Apakah anda yakin ingin menghapus ?\')"');
                        ?>
						</td>
					
            <?php
                }
            ?>
            </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>


<script type="text/javascript">
$(function() {

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '200px',
            targets: [ 15 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
        language: {
            search: '<span>Cari :</span> _INPUT_',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'Cari' : 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });


    // Basic responsive configuration
    $('.datatable-responsive').DataTable();


    // Add placeholder to the datatable filter option
    $('.dataTables_filter input[type=search]').attr('placeholder','Ketik ...');


    // Enable Select2 select for the length option
    $('.dataTables_length select').select2({
        minimumResultsForSearch: "-1"
    });
    
});
</script>