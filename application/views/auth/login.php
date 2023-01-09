<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_partials/head') ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
        <img src="<?php echo base_url('assets/img/logo_garut.png'); ?>" alt="Siwardah Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8" width="50px">
            Rutilahu
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    Selamat datang, <br>
                    Sistem Informasi Rutilahu
                </p>

                <form action="<?php echo base_url('login/validasi'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" autofocus autocomplete="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <!-- <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <input type="submit" name="submit" class="btn btn-primary btn-block">
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <?php $this->load->view('_partials/js.php') ?>
</body>

</html>