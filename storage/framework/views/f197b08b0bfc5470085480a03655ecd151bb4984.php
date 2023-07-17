

<?php $__env->startSection('content'); ?>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ManTalk254</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>" />

  <!-- Custom styles for this template -->
  <link href=" <?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet" />
</head>

<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container d-block">
          <div class="main_nav_menu">
            <div class="fk_width">
              <div class="custom_menu-btn d-flex">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a class="" href="#">Home <span class="sr-only">(current)</span></a>
                  <a class="" href="about.html">About </a>
                  <a class="" href="gallery.html">Gallery </a>
                  <a class="" href="blog.html">Blog </a>
                  <a class="" href="testimonial.html">Testimonial </a>
                </div>
              </div>
            </div>
            <span>
            <a class="navbar-brand" href="https://www.youtube.com/@themantalk254">
              <span>
                ManTalk254
              </span>
            </a>
            </span>
              <div class="user_option">
              <a href="<?php echo e(route('register.show')); ?>">
                Register
              </a>
              <form class="form-inline ">
                <button class="btn  nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <form method="post" action="<?php echo e(route('login.perform')); ?>">
        
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        <img class="mb-4" src="https://yt3.googleusercontent.com/2sunJM-7zPFpM9zPHsLD_56_GRoyrTqktX6BgcrhNuBEsqt13LcBzIpAPDlHaEteA8kxLy4Ulw=s176-c-k-c0x00ffffff-no-rj" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        <?php echo $__env->make('layouts.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            <?php if($errors->has('username')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('username')); ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            <?php if($errors->has('password')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        <?php echo $__env->make('auth.partials.copy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ManTalk\resources\views/auth/login.blade.php ENDPATH**/ ?>