<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style2.css')); ?>">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><span>Bee</span>Fit</a><a href=""><img alt=".." class="logo" src="images/logo.png"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/about')); ?>">About</a>
                    </li>


                    <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >Services</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo e(url('plans')); ?>">Workout</a></li>
                <li><a class="dropdown-item" href="#">Diet</a></li>
                <li>
                  <a class="dropdown-item" href="<?php echo e(url('bmi')); ?>">BMI Calculation</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo e(url('appointment')); ?>">Appoinment of Trainer</a>
                </li>
              </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('FAQ')); ?>">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="login" href="<?php echo e(url('/login')); ?>" type="submit">LogIn</a>
                    <li class="nav-item">
                        <a class="login" href="<?php echo e(url('registration')); ?>" type="submit">SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <?php echo $__env->yieldContent('cont'); ?>


</div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\ProjectAD\project-file\resources\views/layouts/nav.blade.php ENDPATH**/ ?>