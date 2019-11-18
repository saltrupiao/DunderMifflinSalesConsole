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
                $("#vendorTable tr").filter(function() {
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
                    <button onclick="location.href='../index.php';" class="btn btn-primary" style="margin-top: 12px;">
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
                <h3>Vendors</h3>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchVendor">
                    Search
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVendor">
                    Add
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editVendor">
                    Edit
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteVendor">
                    Delete
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-4">
                <div class="d-flex wow fadeInUp">
                    <div class="table-responsive-lg pt-4">
                        <table class="table table-borderless table-striped table-dark table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>POC</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Street</th>
                                <th>Zipcode</th>
                                <th>Last Modified</th>
                            </tr>
                            </thead>
                            <tbody id="vendorTable">
                            <?php foreach( $result as $vendor ) { ?>
                                <tr>
                                    <td><?php echo $vendor['VEN_ID']; ?></td>
                                    <td><?php echo $vendor['VEN_NAME']; ?></td>
                                    <td><?php echo $vendor['VEN_POC']; ?></td>
                                    <td><?php echo $vendor['VEN_PHONE']; ?></td>
                                    <td><?php echo $vendor['VEN_EMAIL']; ?></td>
                                    <td><?php echo $vendor['VEN_COUNTRY']; ?></td>
                                    <td><?php echo $vendor['VEN_STATE']; ?></td>
                                    <td><?php echo $vendor['VEN_CITY']; ?></td>
                                    <td><?php echo $vendor['VEN_STREET']; ?></td>
                                    <td><?php echo $vendor['VEN_ZIPCODE']; ?></td>
                                    <td><?php echo $vendor['VEN_LASTMODIFIED']; ?></td>
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

<!-- Search Vendor Modal -->
<div class="modal fade" id="searchVendor">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Search Vendor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="../controller/vendorsController.php" class="was-validated" method="post">
                        <div class="form-group">
                            <label for="venID">Vendor&nbsp;ID:</label>
                            <input type="number" class="form-control" placeholder="Enter vendor ID" name="venID" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button type="submit" class="btn btn-primary" value="select">Submit</button>
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

<!-- Add Vendor Modal -->
<div class="modal fade" id="addVendor">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Vendor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="../controller/vendorsController.php" class="was-validated" method="post">
                        <div class="form-group">
                            <label for="venName">Vendor&nbsp;Name:</label>
                            <input type="text" class="form-control" placeholder="Enter vendor name" name="venName" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venPOC">Point&nbsp;of&nbsp;Contact:</label>
                            <input type="text" class="form-control" placeholder="Enter POC" name="venPOC" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venPhone">Phone:</label>
                            <input type="tel" class="form-control" placeholder="Format: 123-456-7890" name="venPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venEmail">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email address" name="venEmail" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venCountry">Country:</label>
                            <input type="text" class="form-control" placeholder="Enter country" name="venCountry" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venState">State:</label>
                            <select name="venState" class="custom-select mb-3" value="" required>
                                <option selected></option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="SC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label for="venCity">City:</label>
                            <input type="text" class="form-control" placeholder="Enter city" name="venCity" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venStreet">Street:</label>
                            <input type="text" class="form-control" placeholder="Enter street address" name="venStreet" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venZip">Zipcode:</label>
                            <input type="number" class="form-control" placeholder="Enter zipcode" name="venZipcode" value="" required>
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

<!-- Edit Vendor Modal -->
<div class="modal fade" id="editVendor">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Vendor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="../controller/vendorsController.php" class="was-validated" method="post">
                        <div class="form-group">
                            <label for="venID">Vendor&nbsp;ID:</label>
                            <input type="number" class="form-control" id="venID" placeholder="Enter vendor ID" name="venID" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venName">Vendor&nbsp;Name:</label>
                            <input type="text" class="form-control" id="venName" placeholder="Enter vendor name" name="venName" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venPOC">Point&nbsp;of&nbsp;Contact:</label>
                            <input type="text" class="form-control" id="venPOC" placeholder="Enter POC" name="venPOC" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venPhone">Phone:</label>
                            <input type="tel" class="form-control" id="venPhone" placeholder="Format: 123-456-7890" name="venPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venEmail">Email:</label>
                            <input type="email" class="form-control" id="venEmail" placeholder="Enter email address" name="venEmail" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venCountry">Country:</label>
                            <input type="text" class="form-control" placeholder="Enter country" name="venCountry" value="" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venState">State:</label>
                            <select name="venState" class="custom-select mb-3" required>
                                <option selected></option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="SC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please select an item in the list.</div>
                        </div>
                        <div class="form-group">
                            <label for="venCity">City:</label>
                            <input type="text" class="form-control" id="venCity" placeholder="Enter city" name="venCity" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venStreet">Street:</label>
                            <input type="text" class="form-control" id="venStreet" placeholder="Enter street address" name="venStreet" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="venZip">Zipcode:</label>
                            <input type="number" class="form-control" id="venZip" placeholder="Enter zipcode" pattern="[0-9]{5}" name="venZipcode" required>
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

<!-- Delete Vendor Modal -->
<div class="modal fade" id="deleteVendor">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Vendor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container mt-3">
                    <form action="../controller/vendorsController.php" class="was-validated" method="post">
                        <div class="form-group">
                            <label for="venID">Vendor&nbsp;ID:</label>
                            <input type="number" class="form-control" placeholder="Enter vendor ID" name="venID" value="" required>
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
