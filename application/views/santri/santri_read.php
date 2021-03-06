<?php 
    $ci =& get_instance();
?>

<div class="content">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h5 class="panel-title">Detail Santri Dari <?php echo $nama_santri; ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#2" >
                                         Tambah Wali Santri 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="2">Form Tambah Wali</h4>
                                                </div>

                                            <form action="<?php echo base_url('santri/tambah_wali')?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="varchar">Nama Wali</label>
                                                        <input required type="text" class="form-control" name="wali" id="wali" placeholder="Nama Wali"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varchar">Alamat </label>
                                                        <input required type="text" class="form-control" name="alamat" id="Alamat"/>
                                                    </div>
                                                    <input type="hidden" name="id_santri" value="<?php echo $id_santri;?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                </div>
                                            </form>

                                            </div>
                                        </div>
                                    </div>
            
            
            <br><br><br>
            <table class="table datatable-responsive table-sm table-striped" id="mytable">
                <thead>
                    <tr>
                        <th width="50px">No</th>
						<th>Nama Wali Santri</th>
						<th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
				<tbody>
            <?php
                $start = 0;
                foreach ($wali as $dsn)
                {
            ?>
                    <tr>
						<td><?php echo ++$start ?></td>
						<td><?php echo $dsn->wali ?></td>
                        <td><?php echo $dsn->alamat ?></td>
						<td style="text-align:center" width="200px">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#exampleModal" data-idsantri="<?php echo $dsn->id_santri_detail?>" data-wali="<?php echo $dsn->wali ?>" data-alamat="<?php echo $dsn->alamat?>" >Update</button>
						<?php  
							//echo anchor(site_url('santri/update_wali/'.$dsn->id_santri_detail),'Edit'); 
							//echo ' | '; 
							echo anchor(site_url('santri/delete_wali/'.$dsn->id_santri_detail),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
						?>
						</td>
					</tr>
            <?php
                }
            ?>
                </tbody>
            </table>


            <br>
       <a href="<?php echo site_url('santri') ?>" class="btn btn-primary">kembali</a>
       </div>

    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h4 class="modal-title" id="exampleModalLabel">Form Update Wali </h4>
      </div>
      <div class="modal-body">
        <form action="<?echo base_url('santri/update_wali')?>" method="POST">
          <div class="form-group">
            <label for="wali" class="control-label">Nama Wali</label>
            <input type="text" name="wali_up" class="form-control" id="wali_update">
          </div>
          <div class="form-group">
            <label for="alamat" class="control-label">Alamat</label>
            <input type="text" name="alamat_up" class="form-control" id="alamat_update">
          </div>
          <input type="hidden" name="id_santri_detail_up" id="id_santri_detail_up">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">keluar</button>
      </div>
        </form>
    </div>
  </div>
</div>







<script type="text/javascript">

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) ;
  var id_santri = button.data('idsantri') ;
  var wali = button.data('wali') ;
  var alamat = button.data('alamat') ;
  var modal = $(this);
  $('#wali_update').val(wali);
  $('#alamat_update').val(alamat);
  $('#id_santri_detail_up').val(id_santri);
})


$(function() {
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        responsive: true,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 2 ]
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