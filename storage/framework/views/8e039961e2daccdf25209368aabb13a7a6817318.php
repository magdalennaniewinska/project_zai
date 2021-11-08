<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style type="text/css">
            .title
            {
                color:white;
                padding-top:25px; 
                font-size: 25px;
            }
            label
            {
                display: inline-block;
                width: 200px;
            }
        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="opiekun/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="opiekun/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="opiekun/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="opiekun/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('opiekun.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('opiekun.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Edytuj produkt</h1>
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <button type="button" data-dismiss="alert"></button>
                    <?php echo e(session()->get('message')); ?>

                </div>
                <?php endif; ?>
                <form action="<?php echo e(url('updatestudent',$data->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div style="padding:15px;">
                    <label>Imię i Nazwisko</label>
                    <input style="color:black" type="text" name="name" value="<?php echo e($data->name); ?>">
                </div>
                <div style="padding:15px;">
                    <label>Email</label>
                    <input style="color:black" type="text" name="email" value="<?php echo e($data->email); ?>">
                </div>
                <div style="padding:15px;">
                    <label>Status</label>
                    <input style="color:black" type="text" name="usertype" value="<?php echo e($data->usertype); ?>">
                </div>
                <div style="padding:15px;">
                    <input class="btn btn-success" type="submit" name="">
                </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH /Users/magdalenan/laravel_proj/project/resources/views/opiekun/updatestudentview.blade.php ENDPATH**/ ?>