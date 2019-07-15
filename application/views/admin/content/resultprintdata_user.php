      
<!DOCTYPE html>
<html>
<head>
    <title><?php  echo SITE_NAME ." : ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
</head>
<body>
     <table border="1" width="100%" cellpadding="10" cellspacing="0">
                            <caption style="font-size: 15pt; padding-bottom: 11px">Daftar Tamu Dinas Komunikasi dan Informatika Kabupaten Mojokerto<br></br></caption>
                            <tr>
                               <th width="50px">No.</th>
                               <th width="200px">Nama</th>
                               <th width="150px">Jabatan</th>
                               <th width="150px">Instansi</th>
                               <th width="250px">Tujuan</th>
                               <th width="100px">Waktu</th>
                            </tr>
                            <?php foreach ($tamu as $datas): 
                                  ?>
                            <tr>
                               <td align="center"><?php echo $datas->id_tamu ?></td>
                               <td><?php echo $datas->nama_tamu ?></td>
                               <td><?php echo $datas->jabatan_tamu ?></td>
                               <td><?php echo $datas->instansi_tamu ?></td>
                               <td><?php echo $datas->tujuan_tamu ?></td>
                               <td><?php echo $datas->tanggal ?></td>
                              </tr>
                              <?php endforeach; ?>
              </table>
       
</body>
</html>
           