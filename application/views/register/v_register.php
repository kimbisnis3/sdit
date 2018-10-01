<style type="text/css">
.form-artikel {
width: 50%;
border: 3px solid;
}
</style>
<div class="content">
    <div class="container">
        <div class="title">
            <h2>REGISTER</h2>
        </div>
        <div class="form-artikel">
            <form action="<?php echo base_url('register/add'); ?>" method="post" role="form" class="contactForm">
                <div class="form-group">
                    <label class="lb">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" value="">
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat" value=""/ >
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Telepon</label>
                    <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukan Telepon" value=""  />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email"  value=""/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username"  value=""/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password"  value=""/>
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <label class="lb">Ketik Ulang Password</label>
                    <input type="password" class="form-control" name="ulangpassword" id="password" placeholder="Masukan Password"  value=""/>
                    <div class="validation"></div>
                </div>
                <input type="submit" role="button" class="btn btn-primary" value="Kirim"></input>
            </div>
            <div class="col-md-8" >
            </div>
            </div><!--/.row-->
            
        </form>
    </div>