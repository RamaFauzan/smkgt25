 
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>FROM ADD MASTER ADMINISTRASI <small>Menambah data master administrasi secara detail</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                         
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="<?php echo site_url('Welcome/AddMasterAdministrasi'); ?>" method="post">
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">TAHUN AJARAN</label>
                                    <div class="col-sm-10">
                                    <input type="hidden" name="no_administrasi" value="" class="form-control">
                               		<input type="text" name="tahun_ajaran" value="" class="form-control"></div>
                                </div>
								 <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG BANGUNAN</label>
                                    <div class="col-sm-10"><input type="text" name="uang_bangunan" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG KAOS OLAH RAGA</label>
                                    <div class="col-sm-10"><input type="text" name="uang_kaos_olahraga" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG BATIK</label>
                                    <div class="col-sm-10"><input type="text" name="uang_batik" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG ALMAMATER</label>
                                    <div class="col-sm-10"><input type="text" name="uang_almamater" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG ATRIBUT</label>
                                    <div class="col-sm-10"><input type="text" name="uang_atribut" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG PAKET UJIAN KELAS 3</label>
                                    <div class="col-sm-10"><input type="text" name="uang_paket_ujian_kelas_3" class="form-control" value=""></div>
                                </div>  
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG UTS SEMESTER 1</label>
                                    <div class="col-sm-10"><input type="text" name="uang_uts_semester1" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG UTS SEMESTER 3</label>
                                    <div class="col-sm-10"><input type="text" name="uang_uts_semester3" class="form-control" value=""></div>
                                </div> 
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG UTS SEMESTER 5</label>
                                    <div class="col-sm-10"><input type="text" name="uang_uts_semester5" class="form-control" value=""></div>
                                </div>  
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG UAS SEMESTER 2</label>
                                    <div class="col-sm-10"><input type="text" name="uang_uas_semester2" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG UAS SEMESTER 4</label>
                                    <div class="col-sm-10"><input type="text" name="uang_uas_semester4" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG DAFTAR ULANG 1</label>
                                    <div class="col-sm-10"><input type="text" name="uang_daftar_ulang_1" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG DAFTAR ULANG 2</label>
                                    <div class="col-sm-10"><input type="text" name="uang_daftar_ulang_2" class="form-control" value=""></div>
                                </div>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">UANG PRAKERIN</label>
                                    <div class="col-sm-10"><input type="text" name="uang_prakerin" class="form-control" value=""></div>
                                </div>                                                                                                     
								<div class="form-group row"><label class="col-sm-2 col-form-label">KETERANGAN</label>                                    
								      <div class="col-sm-10"><select class="form-control m-b" name="keterangan" value=""> 
      
                                        <option value="1">AKTIF</option>
                                        <option value="0">TIDAK AKTIF</option>                                                                                   
                                    </select>
                                    </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary btn-sm" type="submit" name="btn_simpan" value="Simpan">Save changes</button>
                                        </form>
                                        <button a hreff="<?php base_url('welcome/DataMasterAdministrasi');?>"class="btn btn-white btn-sm" type="submit">Cancel</button>                                        
                                    </div>
                                </div>                            
                        </div>
                    </div>
                </div>
            </div>
        