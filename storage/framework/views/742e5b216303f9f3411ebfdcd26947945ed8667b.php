

<?php $__env->startSection('title'); ?>
    BEEFIT
<?php $__env->stopSection(); ?>


<?php $__env->startSection('cont'); ?>
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
                    type="button"></button>
            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators"
                    type="button"></button>
            <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
                    type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="images/cover.jpg">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Join Us</h5>
                    <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Find the best way to stay
                        fit and healthy.</p>
                    <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="images/cover.jpg">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Our Plans</h5>
                    <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Check our offerd plans
                        and see whats most fitting for you.</p>
                    <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/cover.jpg">
                <div class="carousel-caption">
                    <h5 class="animated fadeInDown" style="animation-delay: 1s">Get In Touch</h5>
                    <p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Have any question? just
                        send it to us or check our information page.</p>
                    <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
                type="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"
                type="button">
            <span aria-hidden="true" class="carousel-control-next-icon"></span> <span
                class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectAD\project-file\resources\views/welcome.blade.php ENDPATH**/ ?>