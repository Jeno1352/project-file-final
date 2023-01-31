
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style1.css')); ?>">



</head>


<body>

<div class="login">

    <img class="logo" src="/images/logo.png">

    <h1 class="text-center"> BEE FIT</h1>
    <form>
        <div class="form-group">
            <label class="form-label" for="email"> </label>
            <input class="form-control" type="email" placeholder="Email" id="email">
        </div>

        <div class="form-group">
            <label class="form-label" for="password"></label>
            <input class="form-control" type="password" placeholder="Password" id="password">
        </div>
        <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" id=" check">
            <label class="form-check-label" for="check"> Remember me</label>
        </div>

        <a class="btn btn-success w-100 mt-1" href="<?php echo e(url('registration')); ?>" type="submit">SIGN IN</a>

        <a class="btn btn-primary w-100 mt-1" href="<?php echo e(url('registration')); ?>" type="submit">SIGN UP</a>
    </form>

</div>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\ProjectAD\project-file\resources\views/login.blade.php ENDPATH**/ ?>