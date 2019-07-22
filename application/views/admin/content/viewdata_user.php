
 
<!-- Pagination -->
<script src="<?php echo base_url('assets/js/tabel1.js') ?>"></script>
<script src="<?php echo base_url('assets/js/tabel2.js') ?>"></script>
<script src="<?php echo base_url('assets/js/tabel3.js') ?>"></script>
<!--  <?php echo setlocale(LC_TIME, 'IND'); ?>
 -->
<div class="main-content">
   <div class="row">
       <div class="col-lg-12 col-md-9 col-sm-12">
            <div class="card shadow-primary card-statistic-2">
        <div class="card-stats">
            <div class="card-stats-title"><div class="card card-bar text-white shadow-primary bg-info"><h4 align="center">Data Tamu</h4></div> 

               <div class="row">
            <div class="col-lg-12">
                <div class="card-stats-item-center">

                <div class="table-responsive">

                              <div class="container mt-1">
                                   <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Instansi</th>
                            <th>Tujuan</th>
                            <th>Gambar</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php foreach ($tamu as $datas): 
                          ?>
                      <tr>
                         <td class="text-center"><?php echo $datas->id_tamu ?></td>      
                              <td><?php echo $datas->nama_tamu ?></td>
                              <td><?php echo $datas->jabatan_tamu ?></td>
                              <td><?php echo $datas->instansi_tamu ?></td>
                              <td><?php echo $datas->tujuan_tamu ?></td>
                              <td><img src="<?php echo base_url( $datas->gambar_tamu ); ?>" width="100" height="80"></td> 
                              
                              <td><?php echo strftime("%d %B %Y %H:%M", strtotime($datas->tanggal)) ; ?></td>  
                      </tr>
                      <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Instansi</th>
                                            <th>Tujuan</th>
                                            <th>Gambar</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </tfoot>
                                </table>
                              </div>

                </div>
              </div>
            </div>
          </div>
            
                    
            </div>
        </div>
    </div>
       </div>
   </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>