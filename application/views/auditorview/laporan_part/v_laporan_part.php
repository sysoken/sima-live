<div class="wrapper wrapper-content m-t-xl animated fadeIn">
    <!-- <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4><i class="fa fa-info-circle"></i> Pencarian Data Berdasarkan Lokasi Cabang</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row form-horizontal">
                            <div class="col-sm-7">
                                <div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-9"><select name="id_cabang" class="form-control" id="OptCabang"></select>
                                        </div>
                                    </div>        
                                </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3><i class="fa fa-info-circle"></i> Data Audit Part</h3>
                    <span id="info_message"></span>
                </div>
                <div class="panel-body">
                    <form id="FormLap" action="<?php echo base_url() ?>laporan_auditor/cetakexcelpart" method="post">
                        <div class="row">
                        <div class="col-sm-8">
                                <div class="col-sm-5 form-group">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-9"><select name="id_cabang" class="form-control" id="OptCabang" required></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 form-group">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">List Audit</label>
                                        <div class="col-sm-9">
                                            <select name="idjadwal_audit" class="form-control" id="OptJadwalAudit" required></select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-5 form-group">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status</label>
                                        <div class="col-sm-9">
                                            <select name="idjadwal_audit" class="form-control" id="status" required>
                                                <option value="--Pilih Status--">--Pilih Status--</option>    
                                                <option value="Sesuai">Sesuai</option>
                                                <option value="Belum Sesuai">Belum Sesuai</option>
                                                <option value="Belum Ditemukan">Belum Ditemukan</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div> -->
                                <span id="change" class="hidden">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Auditor</label>
                                            <div class="col-sm-9"><input type="text" id="auditor" class="form-control" name="auditor" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Tempat</label>
                                            <div class="col-sm-9"><input type="text" id="tempat" class="form-control" name="tempat" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-danger btn-block" id="type" name="type" value="pdf">PDF</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block hidden " id="excel" name="type" value="excel"><i class="fa fa-fw fa-print"></i>Excel</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">PIC Part</label>
                                            <div class="col-sm-9"><input type="text" id="counter" class="form-control" name="counter" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kepala Cabang</label>
                                            <div class="col-sm-9"><input type="text" id="kacab" class="form-control" name="kacab" required></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <a class="btn btn-warning btn-block" id="cancel">Cancel</a>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="col-sm-4">
                            <input type="hidden" name="status" id="status" value="sesuai" />
                            <a id="preview" class="btn btn-primary">Preview</a>
                            <button type="submit" class="btn btn-danger" id="open" name="type" value="pdf"><i class="fa fa-fw fa-file-pdf-o"></i>Report</button>
                                <!-- <a id="open" class="btn btn-danger xshow"><i class="fa fa-fw fa-file-pdf-o"></i> PDF</a>
                                <a type="submit" class="btn btn-danger xshow"><i class="fa fa-fw fa-file-pdf-o"></i> EXCEL</a> -->
                            </div>
                        </div>
                    </form>
                    <hr size="100px">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example gray-bg">
                                    <thead>
                                <tr class="text-center">
                                    <th class="text-center" rowspan="2" width="3%">No</th>
                                    <!-- <th class="text-center" rowspan="2" width="5%">Aksi</th> -->
                                    <!-- <th rowspan="2" class="text-center">Cabang</th> -->
                                    <th rowspan="2" class="text-center">NAMA LOKASI</th>
                                    <th rowspan="2" class="text-center">PART NUMBER</th>
                                    <th rowspan="2" class="text-center">DESKRIPSI</th>
                                    <th rowspan="2" class="text-center">KD RAKBIN</th>
                                    <th colspan="3" class="text-center">QTY</th>
                                    <th rowspan="2" class="text-center">HET</th>
                                    <th rowspan="2" class="text-center">AMOUNT</th>
                                    <th rowspan="2" class="text-center">Status</th>
                                    <th rowspan="2" class="text-center">Kondisi</th>
                                    <th rowspan="2" class="text-center">Keterangan</th>
                                    <th rowspan="2" class="text-center">TANGGAL AUDIT</th>
                                </tr>
                                <tr>
                                    <th class="text-center">QTY</th>
                                    <th class="text-center">QTY FISIK</th>
                                    <th class="text-center">SELISIH</th>
                                </tr>
                                    </thead>
                                    <tbody id="part">
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center" width="3%">No</th>
                                            <th class="text-center">Nama Lokasi</th>
                                            <th class="text-center">Part Number</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">KD Rak Bin</th>
                                            <th class="text-center">QTY</th>
                                            <th class="text-center">QTY FISIK</th>
                                            <th class="text-center">SELISIH</th>
                                            <th class="text-center">HET</th>
                                            <th class="text-center">AMOUNT</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Kondisi</th>
                                            <th class="text-center">Keterangan</th>
                                            <th class="text-center">Tanggal Audit</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>

                    </div>
                    <div class="text-right" id="pagination"></div>
                </div>
            </div>
        </div>
    </div>

</div>