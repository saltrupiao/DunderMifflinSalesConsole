<?php
require('../controller/viewModal.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Dunder Mifflin offers superior paper products at afforable prices. Call today, 1-800-PAPER">

        <title>Dunder Mifflin Inc.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/profile.css">
        <link rel="stylesheet" href="../assets/css/media-queries.css">
        <link rel="stylesheet" href="../assets/css/carousel.css">

        <!-- Favicon and touch icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/ico/dm_ico.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/ico/dm_ico.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/ico/dm_ico.png">
        <link rel="manifest" href="../assets/ico/site.webmanifest">
        <link rel="mask-icon" href="../assets/ico/dm_ico.png" color="#5bbad5">
        <link rel="shortcut icon" href="../assets/ico/dm_ico.png">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="../assets/ico/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#orderTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });
        </script>
        
        <!-- Append new product to modal -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
              $("#btn1").click(function(){
                $("#quantity").after(
                    '<label for="pprCode">Product&nbsp;Code:</label>',
                    '<input type="number" class="form-control" placeholder="Enter product code" name="pprCode[]" required>',
                    '<label for="lneUnits">Quantity:</label>',
                    '<input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="lneUnits[]" required>'
                );
              });
            });
            
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


        <script>
            $(document).ready(function(){
                $(".openViewBtn").click(function() {
                    var getBtnInvID = $(this).val();
                    $('#viewModalBody').load("viewModal.php?id=" + getBtnInvID)
                    $("#viewOrder").modal("show")
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $(".openEditBtn").click(function() {
                    var getBtnInvEditID = $(this).val();
                    $('#editModalBody').load("updateModal.php?id=" + getBtnInvEditID)
                    $("#editOrder").modal("show")
                });
            });
        </script>


    </head>
    <body id="body">
        <!-- Navbar -->
        <nav class="navbar navbar-dark fixed-top navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="../controller/profileController.php">Dunder Mifflin Inc.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form class="nav-link navbar-form" action="../controller/ordersController.php">
                                <button class="btn" type="submit" value="selectall">Orders</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link navbar-form" action="../controller/productsController.php">
                                <button class="btn" type="submit" value="selectall">Products</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link navbar-form" action="../controller/clientsController.php">
                                <button class="btn" type="submit" value="selectall">Clients</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link navbar-form" action="../controller/vendorsController.php">
                                <button class="btn" type="submit" value="selectall">Vendors</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link navbar-form" action="../controller/branchesController.php">
                                <button class="btn" type="submit" value="selectall">Branches</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link navbar-form" action="../controller/profileController.php">
                                <button class="btn" type="submit" value="selectall">Profile</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <button onclick="location.href='../index.php';" id="logBtn" class="btn btn-primary">
                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="main-content">
            <div class="container">
                <div class="row mr-auto pl-3 pt-4">
                    <div class="col-12 pb-2">
                        <div class="d-flex wow fadeInLeft">
                            <h5>Welcome, Michael!</h5>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="col-12 wow fadeIn">
                        <h3>Orders</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 pt-4 wow fadeInLeft">
                        <input id="myInput" type="text" placeholder="Search...">
                    </div>
                    <div class="col-4 pt-4 mx-auto" style="color: red; font-weight: 600;">
                        <p><?php echo $message ?></p>
                    </div>
                    <div class="col-4 pt-4 wow fadeInRight">
                        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchOrder">
                            Search
                        </button>-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addOrder">
                            Add
                        </button>
                        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editOrder">
                            Edit
                        </button>-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteOrder">
                            Delete
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-4">
                        <div class="d-flex wow fadeIn">
                            <div class="table-responsive-lg pt-4">
                                <table class="table table-borderless table-striped table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>Invoice Number</th>
                                            <th>Agent ID</th>
                                            <th>Client ID</th>
                                            <th>Title</th>
                                            <th>Total</th>
                                            <th>Date/Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="orderTable">
                                        <?php foreach( $result as $order ) { ?>
                                            <tr>
                                                <td><?php echo $order['INV_NUM']; ?></td>
                                                <td><?php echo $order['INV_AGT_ID']; ?></td>
                                                <td><?php echo $order['CLI_ID']; ?></td>
                                                <td><?php echo $order['INV_TITLE']; ?></td>
                                                <td>$<?php echo $order['INV_TOTAL']; ?></td>
                                                <td><?php echo $order['INV_DATE']; ?></td>
                                                <td><?php echo $order['INV_STATUS']; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary openViewBtn" value="<?php echo $order['INV_NUM']; ?>">View Details</button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger openEditBtn" value="<?php echo $order['INV_NUM']; ?>">Edit</button>
                                                </td>
                                            </tr>
                                        <?php  }  //End of foreach loop ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- View Order Modal -->
        <div class="modal fade" id="viewOrder" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Full Invoice</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" id="viewModalBody">

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Order Modal -->
        <div class="modal fade" id="searchOrder">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Search Order</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/ordersController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label>Filter&nbsp;Type:</label>
                                    <select name="filter" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="code">Product Code</option>
                                        <option value="code">Vendor ID</option>
                                        <option value="type">Client First Name</option>
                                        <option value="weight">Client Last Name</option>
                                        <option value="size">Agent ID</option>
                                        <option value="color">Date Range</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="input">Value:</label>
                                    <input type="text" class="form-control" id="input" placeholder="Enter Value" name="input" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" name="action" class="btn btn-primary" value="select">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Order Modal -->
        <div class="modal fade" id="addOrder">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Order</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/ordersController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label for="invAgtID">Agent&nbsp;ID:</label>
                                    <input type="text" class="form-control" placeholder="Enter agent ID" name="invAgtID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="invCliID">Client&nbsp;ID:</label>
                                    <input type="text" class="form-control" placeholder="Enter client ID" name="invCliID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="invTitle">Invoice&nbsp;Title:</label>
                                    <input type="text" class="form-control" placeholder="Enter invoice title" name="invTitle" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprCode">Product&nbsp;Code:</label>
                                    <input type="number" class="form-control" placeholder="Enter product code" name="pprCode[]" required>
                                    <label for="lneUnits">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" placeholder="Enter quantity" name="lneUnits[]" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out these fields.</div>
                                </div>
                                <button type="submit" name="action" class="btn btn-primary" value="insert">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary btn-sm mr-auto" id="btn1" data-toggle="tooltip" title="Add New Product"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Edit Order Modal -->
        <div class="modal fade" id="editOrder">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Order</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" id="editModalBody">

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Delete Order Modal -->
        <div class="modal fade" id="deleteOrder">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Order</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/ordersController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label for="invNum">Invoice&nbsp;Number:</label>
                                    <input type="number" class="form-control" placeholder="Enter invoice number" name="invNum" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="action" value="delete">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="page-footer bg-dark text-white text-center pb-2" style="border-top: solid 2px; border-color: black;">  
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-2 pt-4">
                        <a href="http://www.facebook.com/" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="http://www.instagram.com/" title="Instagram"><i class="fab fa-instagram pl-4 pr-4"></i></a>
                        <a href="http://www.twitter.com/" title="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-2">
                        <div class="copy"> 
                            <p>&copy; Copyright 2019 Dunder Mifflin Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Javascript -->
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        
    </body>
</html>
