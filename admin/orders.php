<?php
require('../settings/core.php'); 
require('../controllers/cart_controller.php');
check_login();
if (check_permission() != 1) {
    //redirect to store front
    header('location: ../views/store.php');
  }

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
        <!-- Preloader start -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
        <!-- Preloader end -->
        <!-- Main wrapper start -->
    <div id="main-wrapper">
            <!-- Nav header start -->
        <div class="nav-header">
        </div>
            <!-- Nav header end -->
            <!-- Header start -->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <!-- <div class="header-left">
                    <div class="input-group icons">
                    </div>
                </div> -->
            </div> 
        </div>
            <!-- Sidebar start  -->
       <?php include('sidebar.php'); ?>       
            <!-- Sidebar end  -->
            <!-- Content body start -->
        <div class="content-body">
            <div class="row page-titles mx-0">
                
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Orders</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Customer name</th>
                                                <th>Invoice number</th>
                                                <th>Order date</th>
                                                <th>Order status</th>
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                             <?php
                                            $orders = show_orders_controller(); 
                                            foreach($orders as $order){
                                              echo 
                                                    "
                                                    <tr>
                                                        <td>{$order['order_id']}</td>
                                                        <td>{$order['customer_name']}</td>
                                                        <td>{$order['invoice_no']}</td>
                                                        <td>{$order['order_date']}</td>
                                                        <td>{$order['order_status']}</td>
                                                    </tr>
                                                    ";
                                                }

                                                 ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
            <!-- Content body end -->
            <!-- Footer start -->
      
        <div class="footer">
            <div class="copyright">
            <p>Copyright &copy; Designed & Developed by Lifestyle101 2021</p>
            </div>
        </div>
         <!-- Footer end -->
     
    </div>

        <!-- Main wrapper end -->
        <!-- Scripts -->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>