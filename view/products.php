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
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/ico/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/ico/favicon-16x16.png">
        <link rel="manifest" href="../assets/ico/site.webmanifest">
        <link rel="mask-icon" href="../assets/ico/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="../assets/ico/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#paperTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });
        </script>
        
    </head>
    <body id="body">
        <!-- Navbar -->
        <nav class="navbar navbar-dark fixed-top navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="profile.php">Dunder Mifflin Inc.</a>
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
                    <div class="col-12">
                        <div class="d-flex wow fadeInLeft">
                            <h5>Welcome, Michael!</h5>
                        </div>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="col-12 wow fadeIn">
                        <h3>Paper Products</h3>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchProduct">
                            Search
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">
                            Add
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProduct">
                            Edit
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteProduct">
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
                                            <th>Product Code</th>
                                            <th>Vendor ID</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Weight</th>
                                            <th>Image</th>
                                            <th>QOH</th>
                                            <th>Price</th>
                                            <th>Last Modified</th>
                                        </tr>
                                    </thead>
                                    <tbody id="paperTable">
                                        <?php foreach( $result as $paper ) { ?>
                                            <tr>
                                                <td><?php echo $paper['PPR_CODE']; ?></td>
                                                <td><?php echo $paper['VEN_ID']; ?></td>
                                                <td><?php echo $paper['PPR_TYPE']; ?></td>
                                                <td><?php echo $paper['PPR_SIZE']; ?></td>
                                                <td><?php echo $paper['PPR_COLOR']; ?></td>
                                                <td><?php echo $paper['PPR_WEIGHT']; ?></td>
                                                <td><?php echo $paper['PPR_IMG']; ?></td>
                                                <td><?php echo $paper['PPR_QOH']; ?></td>
                                                <td><?php echo $paper['PPR_PRICE']; ?></td>
                                                <td><?php echo $paper['PPR_LASTMODIFIED']; ?></td>
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
        
        <!-- Search Product Modal -->
        <div class="modal fade" id="searchProduct">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Search Paper Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="products.php" class="was-validated">
                                <div class="form-group">
                                    <label>Filter&nbsp;Type:</label>
                                    <select name="filter" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="code">Product Code</option>
                                        <option value="code">Vendor ID</option>
                                        <option value="type">Type</option>
                                        <option value="weight">Weight</option>
                                        <option value="size">Size</option>
                                        <option value="color">Color</option>
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
                                <button type="submit" class="btn btn-primary">Submit</button>
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
        
        <!-- Add Product Modal -->
        <div class="modal fade" id="addProduct">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Paper Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/productsController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label for="venID">Vendor&nbsp;ID:</label>
                                    <input type="number" class="form-control" placeholder="Enter vendor ID" name="venID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprType">Paper&nbsp;Type:</label>
                                    <select name="pprType" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="Recycled">Recycled</option>
                                        <option value="Bond">Bond</option>
                                        <option value="Coated">Coated</option>
                                        <option value="Woodfree Uncoated">Woodfree Uncoated</option>
                                        <option value="Newsprint">Newsprint</option>
                                        <option value="Acid-free">Acid-free</option>
                                        <option value="Carbonless">Carbonless</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprSize">Size:</label>
                                    <select name="pprSize" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="A4O">A4O (66.2 x 93.6 in)</option>
                                        <option value="2AO">2AO (46.8 x 66.2 in)</option>
                                        <option value="A0">A0 (33.1 x 46.8 in)</option>
                                        <option value="A1">A1 (23.4 x 33.1 in)</option>
                                        <option value="A2">A2 (16.5 x 23.4 in)</option>
                                        <option value="A3">A3 (11.7 x 16.5 in)</option>
                                        <option value="A4">A4 (8.3 x 11.7 in)</option>
                                        <option value="A5">A5 (5.8 x 8.3 in)</option>
                                        <option value="A6">A6 (4.1 x 5.8 in)</option>
                                        <option value="A7">A7 (2.9 x 4.1 in)</option>
                                        <option value="A8">A8 (2.0 x 2.9 in)</option>
                                        <option value="A9">A9 (1.5 x 2.0 in)</option>
                                        <option value="A10">A10 (1.0 x 1.5 in)</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprColor">Color:</label>
                                    <input type="color" class="form-control" placeholder="Enter Paper Color" name="pprColor" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprWeight">Weight:</label>
                                    <select name="pprWeight" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="20">20 lb.</option>
                                        <option value="24">24 lb.</option>
                                        <option value="32">32 lb.</option>
                                        <option value="65">65 lb.</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprImg">Image:</label>
                                    <input type="file" name="pprImg" accept="image/png, image/jpeg" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprQOH">QOH:</label>
                                    <input type="number" class="form-control" placeholder="Enter Quantity" name="pprQOH" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprPrice">Price:</label>
                                    <input type="number" class="form-control" placeholder="Enter Price" name="pprPrice" step="0.01" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" name="action" class="btn btn-primary" value="insert">Submit</button>
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
       
        <!-- Edit Product Modal -->
        <div class="modal fade" id="editProduct">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Paper Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/productsController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label for="pprCode">Product&nbsp;Code:</label>
                                    <input type="number" class="form-control" placeholder="Enter product code" name="pprCode" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                <label for="venID">Vendor&nbsp;ID:</label>
                                    <input type="number" class="form-control" placeholder="Enter vendor ID" name="venID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprType">Paper&nbsp;Type:</label>
                                    <select name="pprType" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="Recycled">Recycled</option>
                                        <option value="Bond">Bond</option>
                                        <option value="Coated">Coated</option>
                                        <option value="Woodfree Uncoated">Woodfree Uncoated</option>
                                        <option value="Newsprint">Newsprint</option>
                                        <option value="Acid-free">Acid-free</option>
                                        <option value="Carbonless">Carbonless</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprSize">Size:</label>
                                    <select name="pprSize" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="A4O">A4O (66.2 x 93.6 in)</option>
                                        <option value="2AO">2AO (46.8 x 66.2 in)</option>
                                        <option value="A0">A0 (33.1 x 46.8 in)</option>
                                        <option value="A1">A1 (23.4 x 33.1 in)</option>
                                        <option value="A2">A2 (16.5 x 23.4 in)</option>
                                        <option value="A3">A3 (11.7 x 16.5 in)</option>
                                        <option value="A4">A4 (8.3 x 11.7 in)</option>
                                        <option value="A5">A5 (5.8 x 8.3 in)</option>
                                        <option value="A6">A6 (4.1 x 5.8 in)</option>
                                        <option value="A7">A7 (2.9 x 4.1 in)</option>
                                        <option value="A8">A8 (2.0 x 2.9 in)</option>
                                        <option value="A9">A9 (1.5 x 2.0 in)</option>
                                        <option value="A10">A10 (1.0 x 1.5 in)</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprColor">Color:</label>
                                    <input type="color" class="form-control" placeholder="Enter Paper Color" name="pprColor" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprWeight">Weight:</label>
                                    <select name="pprWeight" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="20">20 lb.</option>
                                        <option value="24">24 lb.</option>
                                        <option value="32">32 lb.</option>
                                        <option value="65">65 lb.</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprImg">Image:</label>
                                    <input type="file" name="pprImg" accept="image/png, image/jpeg" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprQOH">QOH:</label>
                                    <input type="number" class="form-control" placeholder="Enter Quantity" name="pprQOH" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="pprPrice">Price:</label>
                                    <input type="number" class="form-control" placeholder="Enter Price" name="pprPrice" step="0.01" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" name="action" class="btn btn-primary" value="update">Submit</button>
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
        
        <!-- Delete Product Modal -->
        <div class="modal fade" id="deleteProduct">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Paper Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/productsController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label for="pprCode">Product&nbsp;Code:</label>
                                    <input type="number" class="form-control" placeholder="Enter product code" name="pprCode" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="venID">Vendor&nbsp;ID:</label>
                                    <input type="number" class="form-control" placeholder="Enter vendor ID" name="venID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" name="action" class="btn btn-primary" value="delete">Submit</button>
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
