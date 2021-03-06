<div class="content">

    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 class="panel-title">Form <?php echo $button ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body"> 

            <form action="<?php echo $action; ?>" method="post">
                    <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?php echo $user->id; ?>" />
                    <input type="hidden" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo date("Y-m-d"); ?>" />
                            <br>

                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="varchar">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#111" >
                                        Pilih Jenis Izin
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="111" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="111">Jenis_izin</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Pulang :</b>  <br>
                                                    <b>Sakit :</b> <br>
                                                    <b>Kepentingan Keluarga :</b>  <br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('jenis_izin') ?>
                            </label>
                            <select class="form-control" name="jenis_izin" id="jenis_izin" >
                                <option value ="" > ... </option>
                                <option value="Keluar" <?php if($jenis_izin == 'Keluar'){echo 'selected';} ?>> Keluar </option>
                                <option value="Pulang" <?php if($jenis_izin == 'Pulang'){echo 'selected';} ?>> Pulang </option>
                                <option value="Sakit" <?php if($jenis_izin == 'Sakit'){echo 'selected';} ?>> Sakit </option>
                                <option value="Kepentingan Keluarga" <?php if($jenis_izin == 'Kepentingan Keluarga'){echo 'selected';} ?>> Kepentingan Keluarga </option>
                                <option value="Bepergian" <?php if($jenis_izin == 'Bepergian'){echo 'selected';} ?>> Bepergian </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#2" >
                                         Jarak Izin
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="2">Jarak Izin </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Sangat Dekat:</b><br>
                                                    <b>Dekat:</b> <br>
                                                    <b>Sedang:</b><br>
                                                    <b>Jauh:</b><br>
                                                    <b>Sangat Jauh:</b><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php echo form_error('jarak_izin') ?>
                            </label>
                            <select class="form-control" name="jarak_izin" id="jarak_izin" >
                                <option value ="" > ... </option>
                                <option value="Sangat Dekat" <?php if($jarak_izin == 'Sangat Dekat'){echo 'selected';} ?>> Sangat Dekat </option>
                                <option value="Dekat" <?php if($jarak_izin == 'Dekat'){echo 'selected';} ?>> Dekat </option>
                                <option value="Sedang" <?php if($jarak_izin == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Jauh" <?php if($jarak_izin == 'Jauh'){echo 'selected';} ?>> Jauh </option>
                                <option value="Sangat Jauh" <?php if($jarak_izin == 'Sangat Jauh'){echo 'selected';} ?>> Sangat Jauh </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#3" >
                                          Durasi Izin
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="3"> Batuan Penyusun Lereng </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Singkat :</b><br>
                                                    <b>Lama :</b> <br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('durasi_izin') ?>
                                
                            </label>
                            <select class="form-control" name="durasi_izin" id="durasi_izin" >
                                <option value ="" > ... </option>
                                <option value="Singkat" <?php if($durasi_izin == 'Singkat'){echo 'selected';} ?>> Singkat </option>
                                <option value="Sedang" <?php if($durasi_izin == 'Sedang'){echo 'selected';} ?>> Sedang </option>
                                <option value="Lama" <?php if($durasi_izin == 'Lama'){echo 'selected';} ?>> Lama </option>    
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="varchar">
                             
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#4" >
                                          Pelanggaran
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="4">Curah Hujan</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Pernah :</b><br>
                                                    <b>Belum:</b><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('pelanggaran') ?>
                                
                            </label>
                            <select class="form-control" name="pelanggaran" id="pelanggaran">
                                <option value ="" > ... </option>
                                <option value="Pernah" <?php if($pelanggaran == 'Pernah'){echo 'selected';} ?>> Pernah </option>
                                <option value="Belum Pernah" <?php if($pelanggaran == 'Belum Pernah'){echo 'selected';} ?>> Belum Pernah </option>
                            </select>
                            </div>
                        <div class="form-group">
                            <label for="varchar">
                             
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#4" >
                                          Status 
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="4">Curah Hujan</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <b>Terlambat :</b><br>
                                                    <b>Tidak Terlambat:</b><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                            <?php echo form_error('prediksi') ?>
                                
                            </label>
                            <select class="form-control" name="prediksi" id="prediksi">
                                <option value ="" > ... </option>
                                <option value="Terlambat" <?php if($prediksi == 'Terlambat'){echo 'selected';} ?>> Terlambat </option>
                                <option value="Tidak Terlambat" <?php if($prediksi == 'Tidak Terlambat'){echo 'selected';} ?>> Tidak Terlambat </option>
                            </select>

                        </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="id_data_set" value="<?php echo $id_data_set; ?>" />
                <br><br>
                <center>
                    <button type="submit" class="btn btn-success btn-large"><?php echo $button ?></button> 
                </center> 
               
            </form>
        
        </div>
    </div>
</div>