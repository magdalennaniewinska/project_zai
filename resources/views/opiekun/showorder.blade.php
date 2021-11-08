<!DOCTYPE html>
<html lang="en">
  <head>
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
      @include('opiekun.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('opiekun.navbar')
        <!-- partial -->
        <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
                <div class="container" align="center">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" data-dismiss="alert"></button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <style>
                        table, th, td {
                        border: 2px solid black;
                        }
                    </style>
                    <table>
                        <tr style="background-color: gray; align-items: center;">
                            <td style="padding:20px;">Opiekun</td>
                            <td style="padding:20px;">Student</td>
                            <td style="padding:20px;">Produkt</td>
                            <td style="padding:20px;">Ilość</td>
                            <td style="padding:20px;">Zwróć</td>
                        </tr>
                        
                        @foreach($order as $orders)
                        <tr align="center" style="border-color: white;">

                        <form action="{{url('return')}}" method="post">
                        @csrf
                            <td><input type="text" name="opiekun_name" value="{{$orders->opiekun_name}}" hidden="">{{$orders->opiekun_name}}</td>
                            <td><input type="text" name="student_name" value="{{$orders->student_name}}" hidden="">{{$orders->student_name}}</td>
                            <td><input type="text" name="product_name" value="{{$orders->product_name}}" hidden="">{{$orders->product_name}}</td>
                            <td><input type="text" name="quantity" value="{{$orders->quantity}}" hidden="">{{$orders->quantity}}</td>
                            <td>
                            <button class="btn btn-success">Zwrot</button>
                            </td>
                            <td><input type="text" name="id" value="{{$orders->id}}" hidden=""></td>
                        </form>
                        </tr>
                        @endforeach
                    </table>
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
