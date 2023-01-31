

<?php $__env->startSection('title'); ?>
   BMI
<?php $__env->stopSection(); ?>


<?php $__env->startSection('cont'); ?>


<head>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />
        <!-- FontAwesome CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"
        />
        <script src="<?php echo e(asset('js/bmi.js')); ?>" defer></script>
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bmi.css')); ?>">
    </head>



  <body>
    <div class="container">
      <h1>BMI Calculator</h1>
      <label>
        <input
          id="h-input"
          type="number"
          placeholder="Enter Your Height in Centimeters: "
        />
      </label>
      <label>
        <input
          id="w-input"
          type="number"
          placeholder="Enter Your Weight in Kilogrames: "
        />
      </label>
      <button type="submit" onclick="Calculate()">Calculate BMI</button>

      <div class="bmi-value">
        <h4>BMI Value:</h4>
        <div id="bmi-output"></div>
      </div>
      <div class="status">
        <h4>Status:</h4>
        <div id="bmi-status"></div>
      </div>
      <a href="<?php echo e(url('/')); ?>"><button>Back</button></a>
    </div>
  </body>
<?php /**PATH C:\xampp\htdocs\ProjectAD\project-file\resources\views/bmi.blade.php ENDPATH**/ ?>