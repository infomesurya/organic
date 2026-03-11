 <!DOCTYPE html>
 <html lang="zxx">

 <head>
     <meta charset="UTF-8">
     <meta name="description" content="Ogani Template">
     <meta name="keywords" content="Ogani, unica, creative, html">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Ogani | Template</title>

     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

     <!-- Css Styles -->
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/elegant-icons.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/slicknav.min.css')); ?>" type="text/css">
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" type="text/css">
 </head>

 <body>

     < <div id="preloder">
         <div class="loader"></div>
     </div> 





     <div class="site-wrapper">

         <?php echo $__env->make('layouts.web_header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

         <?php echo $__env->yieldContent('content'); ?>

         <?php echo $__env->make('layouts.web_footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

         <?php echo $__env->yieldContent('third_party_scripts'); ?>
         <!-- Bottom Menu End -->
         <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/jquery.slicknav.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/mixitup.min.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
         <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

         <?php echo $__env->yieldContent('scripts'); ?>
         <!-- For adding additional page-specific scripts -->
 </body>

 </html>



 </body>

 </html><?php /**PATH C:\xampp\htdocs\organic\resources\views/layouts/wab_app.blade.php ENDPATH**/ ?>