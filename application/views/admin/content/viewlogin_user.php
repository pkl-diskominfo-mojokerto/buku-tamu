<div class="container " style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            
            <?php if(isset($error)) { echo $error; }; ?>

            <div class="account-wall">
                <h1 class="text-center login-title">Form Login Admin</h1>
                <br>
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">    
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>admin/login">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama_admin" placeholder="Masukkan Username Anda" autofocus>
                    <?php echo form_error('nama_admin'); ?>
                </div>
                <div class="form-group">
                    <input type="password" name="pass_admin" class="form-control" placeholder="Masukkan password Anda">
                    <?php echo form_error('pass_admin'); ?>
                </div>

                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                    Masuk</button>

                
                
                </form>
            </div>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>