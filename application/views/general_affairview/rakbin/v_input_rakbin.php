<div class="ibox float-e-margins animated fadeInDown">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-info-circle"></i> Input Rakbin
        </div>
        <div class="panel-body">
            <form method="post" class="form-horizontal" id="FormRakbin" action="<?php echo base_url() ?>master_data/post_rakbin">
                <div>
                <div class="form-group"><label class="col-sm-2 control-label">ID Lokasi </label>
                    <div class="col-sm-6"><select type="text" class="form-control" name="id_lokasi" id="id_lokasi"></select></div>
                 </div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">ID cabang </label>
                        <div class="col-sm-6"><select type="text" class="form-control" name="id_cabang" id="id_cabang"></select></div>
                    </div>
                <div class="form-group"><label class="col-sm-2 control-label">KD Rak</label>
                        <div class="col-sm-4"><input type="text" class="form-control" name="kd_rak" id="kd_rak"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">KD Binbox</label>
                        <div class="col-sm-4"><input type="text" class="form-control" name="kd_binbox" id="kd_binbox"></div>
                    </div>

                    <div>
                        <div class="form-group"><label class="col-sm-2 control-label">KD Lokasi Rak</label>
                            <div class="col-sm-6"><input type="text" class="form-control" name="kd_lokasi_rak" id="kd_lokasi_rak"></div>
                            <div class="col-sm-4 text-right">
                                <input type="button" value="Cancel" class="btn btn-m btn-danger" id="batal" onclick="hide()">
                                <input type="submit" class="btn btn-m btn-success" id="submit" name="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div>
        </div>