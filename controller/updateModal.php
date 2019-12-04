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
    $query = $db->query("SELECT * FROM invoice JOIN line ON (invoice.INV_NUM = line.INV_NUMBER) WHERE invoice.INV_NUM = {$_GET['id']}");
    $query2 = $db->query("SELECT * FROM invoice JOIN line ON (invoice.INV_NUM = line.INV_NUMBER) WHERE invoice.INV_NUM = {$_GET['id']}");

    if($query->num_rows > 0){
        //$invData = $query->fetch_assoc();
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
                <form action=\"../controller/ordersController.php\" class=\"was-validated\" method=\"post\">";

        $rowStaticInvData = $query2->fetch_assoc();


        echo "<div class=\"form-group\">
                    <label for=\"invNum\">Invoice&nbsp;ID:</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter Invoice ID\" name=\"invNum\" value='{$rowStaticInvData['INV_NUM']}' required>
                    <div class=\"valid-feedback\">Valid.</div>
                    <div class=\"invalid-feedback\">Please fill out this field.</div>
                  </div>";
        echo "<div class=\"form-group\">
                    <label for=\"invAgtID\">Agent&nbsp;ID:</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter agent ID\" name=\"invAgtID\" value='{$rowStaticInvData['INV_AGT_ID']}' required>
                    <div class=\"valid-feedback\">Valid.</div>
                    <div class=\"invalid-feedback\">Please fill out this field.</div>
                  </div>";
        echo "<div class=\"form-group\">
                    <label for=\"invCliID\">Client&nbsp;ID:</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter client ID\" name=\"invCliID\" value='{$rowStaticInvData['CLI_ID']}' required>
                    <div class=\"valid-feedback\">Valid.</div>
                    <div class=\"invalid-feedback\">Please fill out this field.</div>
                  </div>";
        echo "<div class=\"form-group\">
                    <label for=\"invTitle\">Invoice&nbsp;Title:</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter invoice title\" name=\"invTitle\" value='{$rowStaticInvData['INV_TITLE']}' required>
                    <div class=\"valid-feedback\">Valid.</div>
                    <div class=\"invalid-feedback\">Please fill out this field.</div>
                  </div>";
        echo "<div class=\"form-group\">
                    <label for=\"invStatus\">Invoice&nbsp;Status:</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter invoice title\" name=\"invStatus\" value='{$rowStaticInvData['INV_STATUS']}' required>
                    <div class=\"valid-feedback\">Valid.</div>
                    <div class=\"invalid-feedback\">Please fill out this field.</div>
                  </div>";

        while ($rowInvData = $query->fetch_assoc()) {
            echo "<div class=\"form-group\">
                     <label for=\"pprCode\">Product&nbsp;Code:</label>
                     <input type=\"number\" class=\"form-control\" placeholder=\"Enter product code\" name=\"pprCode[]\" value='{$rowInvData['PPR_CODE']}' required>
                     <label for=\"lneUnits\">Quantity:</label>
                     <input type=\"number\" class=\"form-control\" placeholder=\"Enter quantity\" name=\"lneUnits[]\" value='{$rowInvData['LNE_UNITS']}' required>
                     <div class=\"valid-feedback\">Valid.</div>
                     <div class=\"invalid-feedback\">Please fill out these fields.</div>
                  </div>";
        }
        echo "<button type=\"submit\" name=\"action\" class=\"btn btn-primary\" value=\"update\">Submit</button>";
        echo "</form></div></div></div></body></html>";

    }else{
        echo 'Content not found....';
        echo "{$_GET['id']}";
    }
}else {
    //echo 'Content not found....';

}
?>