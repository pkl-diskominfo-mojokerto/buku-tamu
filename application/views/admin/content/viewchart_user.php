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

                <canvas id="Tampil" style="100%; height:400px;"></canvas>
                <script>

                var cData = JSON.parse('<?php echo $chart_data ?>')

                var ctx = document.getElementById('Tampil').getContext('2d');
                var Tampil = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: cData.label,
                        datasets: [{
                            label: 'Jumlah User',
                            data: cData.data,
                            backgroundColor: "#6970d5",
                            borderColor: "#6970d5",
                            pointBorderColor: "#6970d5",
                            pointBackgroundcolor: "#6970d5",
                            pointHoverBackgroundcolor: "#000",
                            pointHoverBorderColor: "#6970d5",
                            pointBorderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
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