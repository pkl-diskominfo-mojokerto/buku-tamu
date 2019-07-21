<div class="main-content">
   <div class="row">
       <div class="col-lg-12 col-md-9 col-sm-12">
            <div class="card shadow-primary card-statistic-2">
        <div class="card-stats">
            <div class="card-stats-title"><div class="card card-bar text-white shadow-primary bg-info"><h4 align="center">Print Laporan</h4></div> 

            <div class="row">     
              <div class="col-lg-6">
                  <h6 class="h4 text-gray-900 mb-3"><i class="fa fa-download"></i>Laporan Berdasarkan Waktu</h6>
            <form action="print_laporan" method="post" target="_blank">
            <table>
              <tr>
                <td>
                  <div class="form-group"><h6>Dari Tanggal</h6></div>
                </td>
                <td align="center" widht="5%">
                  <div class="form-group">:</div>
                </td>
                <td>
                  <div class="form-group">
                    <input type="date" class="form-control" name="tgl_a" required>
                  </div>
                </td>             
              </tr>
               <tr>
                <td>
                  <div class="form-group"><h6>Sampai Tanggal</h6></div>
                </td>
                <td align="center">
                  <div class="form-group">:</div>
                </td>
                <td>
                  <div class="form-group">
                    <input type="date" class="form-control" name="tgl_b" required>
                  </div>
                </td>             
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <input type="submit" name="cetak" class="btn btn-primary btn-md" value="Cetak">
                </td>
              </tr>
          </table>
        </form>
        </div>
      

              <div class="col-lg-16">
                <div class="card-stats-item-center">
                   <h2 class="h4 text-gray-900 mb-3"><i class="fa fa-download"></i> Download Lengkap Laporan </h2>
                   
                <a href="<?= base_url('admin/print_laporan') ?>" class="btn btn-primary" target="_blank"> Cetak </a>
                </div>
            </div>
         </div>
            
                    
            </div>
        </div>
    </div>
       </div>
   </div>
</div>

<!--  <?php setlocale(LC_TIME, 'IND');
                                $tgl = strftime("%d %B %Y %H:%M", $datas->tanggal) ?>
                              <td><?php echo $tgl ?></td>
                              </tr>
                              <?php $tgl="" ?> -->