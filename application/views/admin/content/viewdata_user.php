<div class="main-content">
   <div class="row-center" >
       <div class="col-lg-10 col-md-10 col-sm-12" >
            <div class="card card-statistic-2" >
        <div class="card-stats" >
            <div class="card-stats-title"><h4 align="center">Tempat Table Data User</h4> 
                <div class="card-stats-item-center">
                  <div class="table-responsive-lg">
                    <table class="table table-bordered table-hover table-striped">
                  <tr>
                      <th width="50">No.</th>
                      <th width="150">Nama Lengkap</th>
                      <th width="150">Jabatan</th>
                      <th width="150">Instansi</th>
                      <th width="200">Tujuan</th>
                      <th width="230">Gambar</th>
                  </tr>
                  <?php foreach ($tamu as $datas): ?>
                  <tr>
                      <td class="text-center"><?php echo $datas->id_tamu ?></td>      
                      <td><?php echo $datas->nama_tamu ?></td>
                      <td><?php echo $datas->jabatan_tamu ?></td>
                      <td><?php echo $datas->instansi_tamu ?></td>
                      <td><?php echo $datas->tujuan_tamu ?></td>
                      <td><?php echo $datas->gambar_tamu ?></td>                  
                  </tr>
                  <?php endforeach; ?>
                  </table>
                  </div>
                  
                    
                   
                </div>
            </div>
        </div>
    </div>
 </div>
   </div>
</div>