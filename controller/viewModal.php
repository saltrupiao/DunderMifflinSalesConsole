<?php
if(!empty($_GET['id'])){
    //DB details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'dundermifflindb';

    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }

    //get content from database
    $query = $db->query("SELECT * FROM line WHERE INV_NUMBER = {$_GET['id']}");

    if($query->num_rows > 0){
        echo "<!DOCTYPE html>
        <html lang=\"en\">
            <head>
                <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600\">
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\" integrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\" crossorigin=\"anonymous\">
                <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
                <link rel=\"stylesheet\" href=\"../assets/css/animate.css\">
                <link rel=\"stylesheet\" href=\"../assets/css/profile.css\">
                <link rel=\"stylesheet\" href=\"../assets/css/media-queries.css\">
                <link rel=\"stylesheet\" href=\"../assets/css/carousel.css\">
                <meta name=\"msapplication-TileColor\" content=\"#da532c\">
                <meta name=\"msapplication-config\" content=\"../assets/ico/browserconfig.xml\">
                <meta name=\"theme-color\" content=\"#ffffff\">
            </head>
    
	    <body>
                <div class=\"container mt-3\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 pb-4\">
                            <div class=\"d-flex wow fadeIn\">
                                <div class=\"table-responsive-sm pt-4\">
                                    <table class=\"table table-borderless table-striped text-center table-dark table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Invoice Number</th>
                                                <th>Product Code</th>
                                                <th>Line Units</th>
                                                <th>Line Price</th>
                                            </tr>
                                        </thead>
                                    <tbody>";
                                        while ($rowInvData = $query->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$rowInvData['INV_NUMBER']."</td>";
                                            echo "<td>".$rowInvData['PPR_CODE']."</td>";
                                            echo "<td>".$rowInvData['LNE_UNITS']."</td>";
                                            echo "<td><span>&#36;</span>".$rowInvData['LNE_PRICE']."</td>";
                                            echo "</tr>";
                                        }

                                echo "</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </html>";
    }
    else {
        echo 'Content not found....';
        echo "{$_GET['id']}";
    }
}

?>