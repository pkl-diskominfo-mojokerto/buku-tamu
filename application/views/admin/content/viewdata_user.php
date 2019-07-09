<div class="main-content">
   <div class="row-center" >
       <div class="col-lg-11 col-md-11 col-sm-12" >
            <div class="card shadow-primary card-statistic-2" >
        <div class="card-stats" >
            <div class="card-stats-title"><div class="card card-bar text-white shadow-primary bg-info"><h4 align="center">Data User</h4> </div>
              
                <div class="card-stats-item-center">
                  <div class="table-responsive-lg">
                    <table class="table table-bordered table-hover shadow-primary">
                  <tr>
                      <th width="50">No.</th>
                      <th width="150">Nama Lengkap</th>
                      <th width="150">Jabatan</th>
                      <th width="150">Instansi</th>
                      <th width="200">Tujuan</th>
                      <th width="230">Gambar</th>
                      <th width="150">Waktu</th>
                  </tr>
                  <?php foreach ($tamu as $datas): 
                  ?>
                  <tr>
                      <td class="text-center"><?php echo $datas->id_tamu ?></td>      
                      <td><?php echo $datas->nama_tamu ?></td>
                      <td><?php echo $datas->jabatan_tamu ?></td>
                      <td><?php echo $datas->instansi_tamu ?></td>
                      <td><?php echo $datas->tujuan_tamu ?></td>
                      <td><?php echo $datas->gambar_tamu ?></td> 
                      <td><?php echo $datas->tanggal ?></td>                 
                  </tr>
                  <?php endforeach; ?>
                  </table>
                  <div class="row"><div class="col">
                    <?php echo $pagination; ?>
                  </div>
                </div>
                    
                   
                </div>
            </div>
        </div>
    </div>
 </div>
   </div>
</div>