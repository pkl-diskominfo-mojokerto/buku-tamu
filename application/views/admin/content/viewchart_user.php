<div class="main-content">
   <div class="row">
       <div class="col-lg-12 col-md-9 col-sm-12">
            <div class="card shadow-primary card-statistic-2">
        <div class="card-stats">
            <div class="card-stats-title"><div class="card card-bar text-white shadow-primary bg-info"><h4 align="center">Statistic Data Kunjungan</h4></div> 

               <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <!-- Untuk Mengisi Chart Berdasar Aktifitas Data Yang Masuk Kebuku Tamu Tiap Bulan -->
                

                  <div id="container" style="width:100%; height:400px;"></div>

                   <script src="<?php echo base_url('assets/js/jquery.chart.js') ?>"></script>
                    <script src="<?php echo base_url('assets/js/view.highchart.js') ?>"></script>
                    <script src="<?php echo base_url('assets/js/view.highchart-export.js') ?>"></script>
                    <script src="<?php echo base_url('assets/js/view.highchart-more.js') ?>"></script>
                  <script>
                      var chart = Highcharts.chart('container', {

                            title: {
                                text: ''
                            },

                            subtitle: {
                                text: ''
                            },

                            xAxis: {
                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                            },

                            series: [{
                                name: 'Jumlah User',
                                type: 'column',
                                colorByPoint: true,
                                data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                                showInLegend: false
                            }]

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