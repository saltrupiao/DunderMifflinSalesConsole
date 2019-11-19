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
                    <form class="nav-link navbar-form" action="../controller/papersController.php">
                        <button class="btn" type="submit" value="selectall">Papers</button>
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
                    <button onclick="location.href='../index.php';" class="btn btn-primary">
                        Logout
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="main-content">
    <div class="container">
        <div class="row mr-auto pl-4">
            <div class="col-12 pb-2">
                <div class="d-flex wow fadeInLeft">
                    <h5>Welcome, Michael!</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-4">
                <div class="d-flex wow fadeIn">
                    <h3>Paper products</h3>
                    <div class="table-responsive-lg pt-4">
                        <table class="table table-borderless table-striped table-dark table-hover">
                            <thead>
                            <tr>
                                <th>Paper Code</th>
                                <th>Vendor ID</th>
                                <th>Type</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Weight</th>
                                <th>Image</th>
                                <th>Quantity On hand</th>
                                <th>Price</th>
                                <th>Last Modified</th>
                            </tr>
                            </thead>
                            <tbody>
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
        <div class="row">
            <div class="col-12 pb-4 wow fadeInUp">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchPaper">
                    Search
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPaper">
                    Add
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPaper">
                    Edit
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deletePaper">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Search Paper Modal -->
<div class="modal fade" id="searchPaper">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Search paper product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="papers.php" class="was-validated">
                        <div class="form-group">
                            <label>Filter&nbsp;Type:</label>
                            <select name="filter" class="custom-select mb-3" required>
                                <option selected></option>
                                <option value="code">Paper Code</option>
                                <option value="code">Vendor ID</option>
                                <option value="type">Type</option>
                                <option value="size">Size</option>
                                <option value="color">Color</option>
                                <option value="weight">Weight</option>
                                <option value="image">Image</option>
                                <option value="QOH">Quantity On Hand</option>
                                <option value="price">Price</option>
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

<!-- Add Paper Modal -->
<div class="modal fade" id="addPaper">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add paper product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="papers.php" class="was-validated">
                        <div class="form-group">
                            <label>paper:</label>
                            <select name="filter" class="custom-select mb-3" required>
                                <option selected></option>
                                <option value="1">Amazonian Paper Co.</option>
                                <option value="2">International Paper Reserve</option>
                                <option value="3">Pete's Paper Picker Piper</option>
                                <option value="4">Heaven's Woodstock</option>
                                <option value="5">Paper Oracle Inc.</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label>Paper&nbsp;Type:</label>
                            <select name="filter" class="custom-select mb-3" required>
                                <option selected></option>
                                <option value="1">Recycled</option>
                                <option value="2">Bond</option>
                                <option value="3">Coated</option>
                                <option value="4">Woodfree Uncoated</option>
                                <option value="5">Newsprint</option>
                                <option value="5">Acid-free</option>
                                <option value="5">Carbonless</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label>Size:</label>
                            <select name="filter" class="custom-select mb-3" required>
                                <option selected></option>
                                <option value="a4o">A4O (66.2 x 93.6 in)</option>
                                <option value="2ao">2AO (46.8 x 66.2 in)</option>
                                <option value="a0">A0 (33.1 x 46.8 in)</option>
                                <option value="a1">A1 (23.4 x 33.1 in)</option>
                                <option value="a2">A2 (16.5 x 23.4 in)</option>
                                <option value="a3">A3 (11.7 x 16.5 in)</option>
                                <option value="a4">A4 (8.3 x 11.7 in)</option>
                                <option value="a5">A5 (5.8 x 8.3 in)</option>
                                <option value="a6">A6 (4.1 x 5.8 in)</option>
                                <option value="a7">A7 (2.9 x 4.1 in)</option>
                                <option value="a8">A8 (2.0 x 2.9 in)</option>
                                <option value="a9">A9 (1.5 x 2.0 in)</option>
                                <option value="a10">A10 (1.0 x 1.5 in)</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label for="color">Color:</label>
                            <input type="color" class="form-control" id="color" placeholder="Enter Paper Color" name="color" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label>Weight:</label>
                            <select name="filter" class="custom-select mb-3" required>
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
                            <label for="img">Image:</label>
                            <input type="file" id="img" name="img" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="QOH">QOH:</label>
                            <input type="number" class="form-control" id="QOH" placeholder="Enter Quantity" name="QOH" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" step="0.01" required>
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

<!-- Edit Paper Modal -->
<div class="modal fade" id="editPaper">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit paper product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="papers.php" class="was-validated">
                        <div class="form-group">
                            <label>Paper&nbsp;Code:</label>
                            <input type="number" class="form-control" id="prodCode" placeholder="Enter paper code" name="prodCode" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label>paper&nbsp;ID:</label>
                            <input type="number" class="form-control" id="venID" placeholder="Enter paper ID" name="venID" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label>Paper&nbsp;Type:</label>
                            <select name="filter" class="custom-select mb-3">
                                <option selected></option>
                                <option value="1">Recycled</option>
                                <option value="2">Bond</option>
                                <option value="3">Coated</option>
                                <option value="4">Woodfree Uncoated</option>
                                <option value="5">Newsprint</option>
                                <option value="5">Acid-free</option>
                                <option value="5">Carbonless</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label>Size:</label>
                            <select name="filter" class="custom-select mb-3">
                                <option selected></option>
                                <option value="a4o">A4O (66.2 x 93.6 in)</option>
                                <option value="2ao">2AO (46.8 x 66.2 in)</option>
                                <option value="a0">A0 (33.1 x 46.8 in)</option>
                                <option value="a1">A1 (23.4 x 33.1 in)</option>
                                <option value="a2">A2 (16.5 x 23.4 in)</option>
                                <option value="a3">A3 (11.7 x 16.5 in)</option>
                                <option value="a4">A4 (8.3 x 11.7 in)</option>
                                <option value="a5">A5 (5.8 x 8.3 in)</option>
                                <option value="a6">A6 (4.1 x 5.8 in)</option>
                                <option value="a7">A7 (2.9 x 4.1 in)</option>
                                <option value="a8">A8 (2.0 x 2.9 in)</option>
                                <option value="a9">A9 (1.5 x 2.0 in)</option>
                                <option value="a10">A10 (1.0 x 1.5 in)</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label for="color">Color:</label>
                            <input type="color" class="form-control" id="color" placeholder="Enter Paper Color" name="color">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label>Weight:</label>
                            <select name="filter" class="custom-select mb-3">
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
                            <label for="img">Image:</label>
                            <input type="file" id="img" name="img">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="QOH">QOH:</label>
                            <input type="number" class="form-control" id="QOH" placeholder="Enter Quantity" name="QOH">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" step="0.01">
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

<!-- Delete Paper Modal -->
<div class="modal fade" id="deletePaper">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete paper product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="papers.php" class="was-validated">
                        <div class="form-group">
                            <label>Filter&nbsp;Type:</label>
                            <select name="filter" class="custom-select mb-3" required>
                                <option selected></option>
                                <option value="code">Paper Code</option>
                                <option value="code">Vendor ID</option>
                                <option value="type">Type</option>
                                <option value="size">Size</option>
                                <option value="color">Color</option>
                                <option value="weight">Weight</option>
                                <option value="image">Image</option>
                                <option value="QOH">Quantity On Hand</option>
                                <option value="price">Price</option>
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
