<?php 
    $ci =& get_instance();;
?>

<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?> Santri</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
                    <label for="varchar">Nama Santri <?php echo form_error('nama_santri') ?></label>
                    <input type="text" class="form-control" name="nama_santri" id="nama_santri" placeholder="Nama Santri" value="<?php echo $nama_santri; ?>" />
                </div>
				<input type="hidden" name="id_santri" value="<?php echo $id_santri; ?>" /> 
				<button type="submit" class="btn btn-success"><?php echo $button ?></button> 
				<a href="<?php echo site_url('santri') ?>" class="btn btn-default">Batal</a>
			</form>
        
        </div>
    </div>
</div>