
<br>
<?php
  $kd  ='1'.$this->uri->segment(4);
  
  ?>
  
<div class="col-lg-4" >
                                    <div class="panel panel-info">
                                      <div class="panel-heading">
                                       <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Welcome/UpdateTA/'.$kd.''.$this->uri->segment(4)); ?>" method="post">

                                            <i class="fa fa-info-circle"></i> Info Panel <a style="<?php echo($this->uri->segment(5) == 'Update') ? 'display:none;' : '' ;?>" 
   class="btn bg-orange pull-right" 
   href="<?php echo site_url('Welcome/TahunAj/AddTA/'.$kd.''.$this->uri->segment(4).'/Update'); ?>"><i class="fa fa-pencil"></i> Edit
</a>

  <button  style="<?php echo($this->uri->segment(5) == 'Update') ? '' : 'display:none' ;?>" 
    type="submit" name="simpan" value="Simpan" class="btn bg-green pull-right">
    <i class="fa fa-check"></i> Simpan
</button>


                                        </div>
                                      
                                        <div class="panel-body">
                                          
                                          <input style=" <?php echo($this->uri->segment(5) == 'Update') ? '' : 'display:none;' ;?>" type="hidden" name="kd">
                                          Tahun Ajaran <span class="badge bg-primary" style="margin-left: 150px; <?php echo($this->uri->segment(5) == 'Update') ? 'display:none;' : '' ;?>"><?php echo $detail['thn_ajaran'];?></span>

                                          <span class="badge bg-primary" style="margin-left: 150px; <?php echo($this->uri->segment(5) == 'Update') ? '' : 'display:none;' ;?>"><input type="text" name="thn_ajaran" value="<?php echo $detail['thn_ajaran'];?>"></span>
                                          <br><br>
                                           Semester <span class="badge bg-primary" style="margin-left: 172px; <?php echo($this->uri->segment(5) == 'Update') ? 'display:none;' : '' ;?>"><?php echo $detail['semester'];?></span>

                                            <span class="badge bg-primary" style="margin-left: 150px; <?php echo($this->uri->segment(5) == 'Update') ? '' : 'display:none;' ;?>"><input type="text" name="semester" value="<?php echo $detail['semester'];?>"></span>
                                          
                                        </div>
                                        

                                        

                                    </div>
           </div>
           </form>


