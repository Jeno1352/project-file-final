<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style1.css')); ?>">

    <title>Registration</title>
</head>

<body>
<div class="registration">
    <form action="<?php echo e(route('insert.registered')); ?>" method="get">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label class="form-label" for="Name"> </label>
            Name<input class="form-control" type="text" placeholder="Name" id="Name" name="Name">

        </div>
        <div class="form-group">
            <label class="form-label" for="Age"> </label>
            Date of Birth<input class="form-control" type="date" placeholder="Date of Birth" id="Age" name="Age">

        </div>
        <div class="form-group">
            <label class="form-label" for="Weight"> </label>
            Weight<input class="form-control" type="number" placeholder="Weight" id="Weight" name="Weight">

        </div>
        <div class="form-group">
            <label class="form-label" for="height"> </label>
            Height<input class="form-control" type="number" placeholder="Height" id="height" name="height">

        </div>
        <div class="form-group">
            <label class="form-label" for="phone"> </label>
            Phone Number<input class="form-control" type="tel"  placeholder="Phone Number" id="tel" name="phone">

        </div>
        <div class="form-group">
            <label class="form-label" for="email"> </label>
            mail<input class="form-control" type="email" placeholder="Email" id="email" name="email">

        </div>
        <div class="form-group">
            <label class="form-label" for="password"> </label>
            password<input class="form-control" type="password" placeholder="Password" id="password" name="password">

        </div>
        <div class="form-group">
            <label class="form-label" for="passwordconfirm"> </label>
            Password Confirmation<input class="form-control" type="password" placeholder="Password Confirmation" id="passwordconfirm"></div>

        <div><input class="btn btn-success w-100" type="submit" value="Done"></div>
</div>

</form>

</body>

</html>

<?php /**PATH C:\xampp\htdocs\ProjectAD\project-file\resources\views/registration.blade.php ENDPATH**/ ?>