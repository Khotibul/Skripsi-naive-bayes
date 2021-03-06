<?php 
    $ci =& get_instance();
?>

<script src="<?php echo base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js') ?>"></script>

<div class="content">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h5 class="panel-title">Rekap Data Santri Sementara</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
            <div class="row">
                <div class="col-md-5 text-left">
                    <button type="button" class="btn btn-sm btn-danger" onclick="printHistori()"><i class="icon-file-pdf"></i> Cetak</button>
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
                        <th width="50px">No</th>
						<th>Nama Santri</th>
                        <th>Tanggal Izin</th>
                        <th>Jenis Izin</th>
						<th>jarak izin</th>
						<th>durasi izin</th>
						<th>Pelanggaran</th>
						<th>Prediksi</th>
                        <th>Akurasi</th>
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
						<td><?php echo $data_tes1->akurasi ?></td>
					</tr>
            <?php
                }
            ?>
                </tbody>
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

$(function() {

    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 5 ]
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

    
});
</script>