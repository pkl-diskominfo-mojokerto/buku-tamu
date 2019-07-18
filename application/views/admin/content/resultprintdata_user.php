      
<!DOCTYPE html>
<html>
<head>
    <title><?php  echo SITE_NAME ." : ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
</head>
<body>
     <table border="1" width="100%" cellpadding="10" cellspacing="0">
                            <caption style="font-size: 20pt; padding-bottom: 11px">Daftar Tamu Dinas Komunikasi dan Informatika Kabupaten Mojokerto<br></br></caption>
                            <tr>
                               <th style="width: 5%" >No.</th>
                               <th style="width: 20%">Nama</th>
                               <th style="width: 15%">Jabatan</th>
                               <th style="width: 20%">Instansi</th>
                               <th style="width: 25%">Tujuan</th>
                               <th style="width: 15%">Waktu</th>
                            </tr>
                            <?php foreach ($tamu as $datas): 
                                  ?>
                            <tr>
                               <td ><?php echo $datas->id_tamu ?></td>
                               <td><?php echo $datas->nama_tamu ?></td>
                               <td><?php echo $datas->jabatan_tamu ?></td>
                               <td><?php echo $datas->instansi_tamu ?></td>
                               <td><?php echo $datas->tujuan_tamu ?></td>
                               
                              <td><?php echo date('d F Y H:i:s' ,strtotime ($datas->tanggal)); ?></td>   
                              </tr>
                              <?php endforeach; ?>
              </table>
       
</body>
</html>
           