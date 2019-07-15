<div class="main-content-center">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <br>
    <div class="container">
      <?php if( $this->session->flashdata('flash') ) : ?>

  <div class="row mt-3">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
         Data User <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>      
    </div>  
  </div>
      <?php endif; ?>
  <div class="row mt-3">

    <div class="card o-hidden border-0 my-2 col-lg-12 mx-auto">
      <div class="card-body p-0">
         <!--  <?php if( validation_errors() ) : ?>
              <div class="alert alert-danger" role="alert">
              <?= validation_errors(); ?>
              </div>
           <?php endif; ?> -->
         
        <div class="row">
           
           <div class="col-lg-6">
            <div class="text-center">
             <div class="p-1">
              <div class="alert alert-primary" role="alert" mt-3>
                <i class="fa fa-camera"></i>
              Kamera
            </div>
            
           
            
              
            
           <video autoplay="true" id="video-webcam" class="col-lg-8">
           Izinkan untuk Mengakses Webcam untuk Demo
           </video>
           <hr>
          
           <button  onclick="takeSnapshot()" class="fa fa-camera-retro" >Ambil Gambar</button>
        
        </div>
        </div>
        </div>

          <div class="col-lg-6 ">
              <i class="fa fa-users fa-2x mt-3 float-right"></i>

            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Pengisian Buku Tamu</h1>
              </div>
              
              <?php echo form_open('user/index');?>
              <form class="user">
                  
              <form action="" method="post">
               <div class="form-group">
                  <input type="text" name="nama" class="form-control form-control-user" id="nama"  placeholder="Nama" required>
              
                </div>
                <div class="form-group">
                  <input type="text" name="jabatan" class="form-control form-control-user" id="jabatan"  placeholder="Jabatan" required>
                </div>
                <div class="form-group">
                <input type="text" name="instansi" class="form-control form-control-user" id="instansi"  placeholder="Instansi" required>
                </div>  
                <div class="form-group">
                <input type="text" name="tujuan" class="form-control form-control-user" id="tujuan"  placeholder="Tujuan" required>
                </div>
                </div>
               
                <button type="submit" name="tambah" class="btn btn-primary float-right mb-3">
                  Simpan
                </button>
               
               
              </form>
            </form>
              <br>
              
            </div>
          </div>
        </div>
      </div>
    </div>
     

  </div>

   <script type="text/javascript">
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");
    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({ video: true }, handleVideo, videoError);
    }
    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
    }
    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
        // do something
        alert("Izinkan menggunakan webcam untuk demo!")
    }
    function takeSnapshot() {
    // buat elemen img
    var img = document.createElement('img');
    var context;
    // ambil ukuran video
    var width = video.offsetWidth
            , height = video.offsetHeight;
    // buat elemen canvas
    canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;
    // ambil gambar dari video dan masukan 
    // ke dalam canvas
    context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, width, height);
    // render hasil dari canvas ke elemen img
    img.src = canvas.toDataURL('image/png');
    document.body.appendChild(img);
}
</script>


</body>
</div>
</div>
</div>