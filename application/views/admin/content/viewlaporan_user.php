<div class="main-content">
   <div class="row">
       <div class="col-lg-12 col-md-9 col-sm-12">
            <div class="card shadow-primary card-statistic-2">
        <div class="card-stats">
            <div class="card-stats-title"><div class="card card-bar text-white shadow-primary bg-info"><h4 align="center">Print Laporan</h4></div> 

               <div class="row">
            <div class="col-lg-12">
                <div class="card-stats-item-center">
                  <!-- Untuk Mengisi Chart Berdasar Aktifitas Data Yang Masuk Kebuku Tamu Tiap Bulan -->
                <a href="<?= base_url('admin/print_laporan') ?>" class="btn btn-info fa fa-file-download" target="_blank"> Download</a>
                </div>
            </div>
          </div>

          <div class="row">
            <form action="print_laporan" method="post" target="_blank">
            <table>
              <tr>
                <td>
                  <div class="form-group">Dari Tanggal</div>
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
                  <div class="form-group">Sampai Tanggal</div>
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
                  <input type="submit" name="cetak" class="btn btn-primary btn-sm" value="Cetak">
                </td>
              </tr>
          </table>
        </form>
        </div>
            
                    
            </div>
        </div>
    </div>
       </div>
   </div>
</div>