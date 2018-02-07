
                        

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>LOGIN</title>
    <!-- <link href="<?php echo e(asset('bootstrap_3_3_6/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" > -->
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/css/styles.css')); ?>" />
    <link href="<?php echo e(url('icon/bambu.png')); ?>" rel="icon" type="image/x-icon">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<body>

    <section class="container login-form">
        <section>
            <form method="post" action="<?php echo e(url('/login')); ?>" role="login">
            <?php echo e(csrf_field()); ?>

                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="" class="img-responsive" />
            
                <div class="form-group form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" required class="form-control" placeholder="Masukkan ID" />
                    <span class="glyphicon glyphicon-user"></span>
                                                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                </div>
                
                <div class="form-group form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input type="password" name="password" id="password" required class="form-control" placeholder="Masukkan Kata Sandi" />
                    <span class="glyphicon glyphicon-lock"></span>
                     <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-block">MASUK</button>
                
                <p class="masuk">Silahkan masuk terlebih dahulu</p>
                <p class="masuk"><a href="<?php echo e(url('password/reset')); ?>"><font color="green"><i>Lupa Kata Sandi ?</i></font></a></p>
            </form>
        </section>
    </section>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>



<!-- //content -->



</html>