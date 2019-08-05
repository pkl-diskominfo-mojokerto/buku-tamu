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
                    <div class="row float-right">
                    <form action="" method="_GET">
                        <select name="Tampil">
                            <option <?php echo $tahun_selected == '2019'?'selected':'' ?> value="2019">2019</option>
                            <option <?php echo $tahun_selected == '2020'?'selected':'' ?> value="2020">2020</option>
                            <option <?php echo $tahun_selected == '2021'?'selected':'' ?> value="2021">2021</option>
                            <option <?php echo $tahun_selected == '2022'?'selected':'' ?> value="2022">2022</option>
                            <option <?php echo $tahun_selected == '2023'?'selected':'' ?> value="2023">2023</option>
                            <option <?php echo $tahun_selected == '2024'?'selected':'' ?> value="2024">2024</option>
                            <option <?php echo $tahun_selected == '2025'?'selected':'' ?> value="2025">2025</option>
                        </select>
                        <button value="cari" type="submit">Cari</button>
                    </form>
                    </div>

                   
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
                        <button onclick="window.print()"  target="_blank">Print</button>
                        <script>
                 
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