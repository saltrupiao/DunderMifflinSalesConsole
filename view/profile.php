<?php
require('../model/databaseConnect.php');
$connection = new mysqli('localhost', 'root', 'oakland', 'dundermifflindb');
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
                    $("#employeeTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });
        </script>

    </head>
    <body id="body"">
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
                        <div class="col-12">
                            <div class="d-flex wow fadeInLeft">
                                <h5>Welcome, Michael!</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-12 wow fadeIn">
                            <h3>Profile</h3>
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
                            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchProfile">
                                Search
                            </button>-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProfile">
                                Add
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfile">
                                Edit
                            </button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteProfile">
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
                                            <th>Employee ID</th>
                                            <th>Branch ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone Number</th>
                                            <th>Country</th>
                                            <th>D.O.B.</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Street</th>
                                            <th>Zip Code</th>
                                            <th>Email</th>
                                            <th>Clearance Level</th>
                                            <th>Profile Last Modified</th>
                                        </tr>
                                    </thead>
                                    <tbody id="employeeTable">
                                    <?php foreach( $result as $profile ) { ?>
                                        <tr>
                                            <td><?php echo $profile['EMP_ID']; ?></td>
                                            <td><?php echo $profile['BCH_ID']; ?></td>
                                            <td><?php echo $profile['EMP_FNAME']; ?></td>
                                            <td><?php echo $profile['EMP_LNAME']; ?></td>
                                            <td><?php echo $profile['EMP_PHONE']; ?></td>
                                            <td><?php echo $profile['EMP_DOB']; ?></td>
                                            <td><?php echo $profile['EMP_COUNTRY']; ?></td>
                                            <td><?php echo $profile['EMP_STATE']; ?></td>
                                            <td><?php echo $profile['EMP_CITY']; ?></td>
                                            <td><?php echo $profile['EMP_STREET']; ?></td>
                                            <td><?php echo $profile['EMP_ZIPCODE']; ?></td>
                                            <td><?php echo $profile['EMP_EMAIL']; ?></td>
                                            <td><?php echo $profile['EMP_CLEARANCE']; ?></td>
                                            <td><?php echo $profile['EMP_LASTMODIFIED']; ?></td>
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
        
        <!-- Search Profile Modal -->
        <div class="modal fade" id="searchProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Search Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/profileController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label>Filter&nbsp;Type:</label>
                                    <select name="filter" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="empID">Employee ID</option>
                                        <option value="bchID">Branch ID</option>
                                        <option value="empFname">First Name</option>
                                        <option value="empLname">Last Name</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="input">Value:</label>
                                    <input type="text" class="form-control" id="input" placeholder="Enter value" name="input" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" name="action" value="select" class="btn btn-primary">Submit</button>
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
        
        <!-- Edit Profile Modal -->
        <div class="modal fade" id="editProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <div class="container mt-3">
                                <form action="../controller/profileController.php" class="was-validated" method="post">
                                    <div class="form-group">
                                        <label for="empID">Employee&nbsp;ID:</label>
                                        <!-- Source: https://stackoverflow.com/questions/8022353/how-to-populate-html-dropdown-list-with-values-from-database-->
                                        <?php
                                        $result = $connection->query("SELECT EMP_ID FROM employee");
                                        echo "<select name='empID' class='custom-select mb-3' required>";
                                        while ($row = $result->fetch_assoc()) {
                                            unset($EMP_ID);
                                            $EMP_ID = $row['EMP_ID'];
                                            echo '<option value="'.$EMP_ID.'">'.$EMP_ID.'</option>';
                                        }
                                        echo "</select>";
                                        ?>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please select an item in the list.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bchID">Branch:</label>
                                        <!-- Source: https://stackoverflow.com/questions/8022353/how-to-populate-html-dropdown-list-with-values-from-database-->
                                        <?php
                                        $result = $connection->query("SELECT BCH_ID, BCH_NAME FROM branch");
                                        echo "<select name='bchID' class='custom-select mb-3' required>";
                                        while ($row = $result->fetch_assoc()) {
                                            unset($BCH_ID, $BCH_NAME);
                                            $BCH_ID = $row['BCH_ID'];
                                            $BCH_NAME = $row['BCH_NAME'];
                                            echo '<option value="'.$BCH_ID.'">'.$BCH_NAME.'</option>';
                                        }
                                        echo "</select>";
                                        ?>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please select an item in the list.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empFname">First&nbsp;Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter first name" name="empFname" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empLname">Last&nbsp;Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter last name" name="empLname" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empPhone">Phone:</label>
                                        <input type="tel" class="form-control" placeholder="Format: 123-456-7890" name="empPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empDOB">Date&nbsp;of&nbsp;Birth:</label>
                                        <input type="date" class="form-control" placeholder="Enter DOB" name="empDOB" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empCountry">Country:</label>
                                        <input type="text" class="form-control" placeholder="Enter country" name="empCountry" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empState">State:</label>
                                        <input type="text" class="form-control" placeholder="Enter state" name="empState" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empCity">City:</label>
                                        <input type="text" class="form-control" placeholder="Enter city" name="empCity" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empStreet">Street&nbsp;Address:</label>
                                        <input type="text" class="form-control" placeholder="Enter street address" name="empStreet" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empZipcode">Zip&nbsp;Code:</label>
                                        <input type="text" class="form-control" placeholder="Enter zipcode" name="empZipcode" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empEmail">Email:</label>
                                        <input type="email" class="form-control" placeholder="Enter email address" name="empEmail" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empPwd">Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="empPwd" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <button type="submit" name="action" class="btn btn-primary" value="update">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Profile Modal -->
        <div class="modal fade" id="addProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/profileController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label>Branch:</label>
                                    <!-- Source: https://stackoverflow.com/questions/8022353/how-to-populate-html-dropdown-list-with-values-from-database-->
                                    <?php
                                    $result = $connection->query("SELECT BCH_ID, BCH_NAME FROM branch");
                                    echo "<select class='custom-select mb-3' name='bchID' required>";
                                    while ($row = $result->fetch_assoc()) {
                                        unset($BCH_ID, $BCH_NAME);
                                        $BCH_ID = $row['BCH_ID'];
                                        $BCH_NAME = $row['BCH_NAME'];
                                        echo '<option value="'.$BCH_ID.'">'.$BCH_NAME.'</option>';
                                    }
                                    echo "</select>";
                                    ?>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empFname">First&nbsp;Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter first name" name="empFname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empLname">Last&nbsp;Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter last name" name="empLname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empPhone">Phone:</label>
                                    <input type="tel" class="form-control" placeholder="Format: 123-456-7890" name="empPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empDOB">Date&nbsp;of&nbsp;Birth:</label>
                                    <input type="date" class="form-control" placeholder="Enter DOB" name="empDOB" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empCountry">Country:</label>
                                    <input type="text" class="form-control" placeholder="Enter country" name="empCountry" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empState">State:</label>
                                    <input type="text" class="form-control" placeholder="Enter state" name="empState" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empCity">City:</label>
                                    <input type="text" class="form-control" placeholder="Enter city" name="empCity" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empStreet">Street&nbsp;Address:</label>
                                    <input type="text" class="form-control" placeholder="Enter street address" name="empStreet" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empZipcode">Zip&nbsp;Code:</label>
                                    <input type="text" class="form-control" placeholder="Enter zipcode" name="empZipcode" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empEmail">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email address" name="empEmail" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empPwd">Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="empPwd" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empClearance">Clearance&nbsp;Level:</label>
                                    <input type="text" class="form-control" placeholder="Enter employee clearance level 0 or 1" name="empClearance" required>
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
                
        <!-- Delete Profile Modal -->
        <div class="modal fade" id="deleteProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="../controller/profileController.php" class="was-validated" method="post">
                                <div class="form-group">
                                    <label for="empID">Employee&nbsp;ID:</label>
                                    <input type="number" class="form-control" placeholder="Enter employee ID" name="empID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empClearance">Employee&nbsp;Clearance:</label>
                                    <input type="text" class="form-control" placeholder="Enter employee clearance level 0 or 1" name="empClearance" required>
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
