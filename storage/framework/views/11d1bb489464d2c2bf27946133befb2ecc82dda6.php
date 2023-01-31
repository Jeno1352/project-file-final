

<?php $__env->startSection('title'); ?>
    BEEFIT
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
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/appointment.css')); ?>">
    </head>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span>Bee</span>Fit</a
        ><a href=""><img class="logo" src="logo.png" /></a>
        <button
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler"
          data-bs-target="#navbarSupportedContent"
          data-bs-toggle="collapse"
          type="button"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About us/index.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account-settings/index.html">Account</a>
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
                <li>
                  <a class="dropdown-item" href="Workout/workout.html"
                    >Workout
                  </a>
                </li>
                <li><a class="dropdown-item" href="#">Diet</a></li>
                <li>
                  <a class="dropdown-item" href="Workout/bmi.html"
                    >BMI Calculation</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="Appointment for booking trainer/index.html"
                    >Appoinment of Trainer</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FAQ/faq.html">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="login" href="Register-login/BEEFIT/loginpage.html"
                >LogIn/SignUp</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">NAZMUL</span><span class="text-black-50">NAZMUL@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Appointment for booking trainer</h4>
                    </div>
                    <div class="formbold-main-wrapper">
                        >
                        <div class="formbold-form-wrapper">
                          <form action="https://formbold.com/s/FORM_ID" method="POST">
                            <div class="formbold-mb-5">
                              <label for="name" class="formbold-form-label"> Full Name </label>
                              <input
                                type="text"
                                name="name"
                                id="name"
                                placeholder="Full Name"
                                class="formbold-form-input"
                              />
                            </div>
                            <div class="formbold-mb-5">
                              <label for="phone" class="formbold-form-label"> Phone Number </label>
                              <input
                                type="text"
                                name="phone"
                                id="phone"
                                placeholder="Enter your phone number"
                                class="formbold-form-input"
                              />
                            </div>
                            <div class="formbold-mb-5">
                              <label for="email" class="formbold-form-label"> Email Address </label>
                              <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="Enter your email"
                                class="formbold-form-input"
                              />
                            </div>
                            <div class="formbold-mb-5">
                                <label for="email" class="formbold-form-label"> Topic </label>
                                <input
                                  type="text"
                                  name="name"
                                  id="name"
                                  placeholder="Enter your Topic"
                                  class="formbold-form-input"
                                />
                              </div>
                            <div class="flex flex-wrap formbold--mx-3">
                              <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5 w-full">
                                  <label for="date" class="formbold-form-label"> Date </label>
                                  <input
                                    type="date"
                                    name="date"
                                    id="date"
                                    class="formbold-form-input"
                                  />
                                </div>
                              </div>
                              <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                  <label for="time" class="formbold-form-label"> Time </label>
                                  <input
                                    type="time"
                                    name="time"
                                    id="time"
                                    class="formbold-form-input"
                                  />
                                </div>
                              </div>
                            </div>
                      
                  
                      
                            <div>
                              <button class="formbold-btn">Pay Now</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      
                    
            </div>
            
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectAD\project-file\resources\views/appointment.blade.php ENDPATH**/ ?>