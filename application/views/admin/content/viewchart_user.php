<div class="main-content">
   <div class="row">
       <div class="col-lg-12 col-md-9 col-sm-12">
            <div class="card shadow-primary card-statistic-2">
        <div class="card-stats">
            <div class="card-stats-title"><div class="card card-bar text-white shadow-primary bg-info"><h4 align="center">Statistik Data Kunjungan</h4></div> 

               <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <!-- Untuk Mengisi Chart Berdasar Aktifitas Data Yang Masuk Kebuku Tamu Tiap Bulan -->
                
                  <div id="data_tamu" style="width:100%; height:400px;"></div>

                    <script src="<?php echo base_url('assets/js/jquery.chart.js') ?>"></script>
                    <script src="<?php echo base_url('assets/js/view.highchart.js') ?>"></script>
                    <script src="<?php echo base_url('assets/js/view.highchart-export.js') ?>"></script>
                    <script src="<?php echo base_url('assets/js/view.highchart-more.js') ?>"></script>
                  <script>
                      var ctx = document.getElementById("Highcharts").getContext("2d")
                      var data_jumlah = [];
                      var data_tanggal = [];

                      $.post("<?php echo base_url('Admin/Chart/getChart') ?>",
                        function (x)
                        {
                          var obj = JSON.parse(x);
                          $.each(obj, function(test, item){
                            data_tanggal.push(item.waktu);
                            data_jumlah.push(item.jumlah);

                            console.log(x);
                          });


                      var chart = Highcharts.chart(ctx, {

                            title: {
                                text: ''    
                            },

                            subtitle: {
                                text: ''
                            },

                            xAxis: {
                                categories: data_tanggal
                            },

                            series: [{
                                name: 'Jumlah User',
                                type: 'column',
                                colorByPoint: true,
                                data:   data_jumlah ,
                                showInLegend: false
                            }]

                        });
                      });                        

                  </script>

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