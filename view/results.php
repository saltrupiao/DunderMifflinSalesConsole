<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>Php Database Example</title>
    </head>
    <body>
        <div class="jumbotron text-center">
          <h1>My First Bootstrap Page</h1>
          <p>Resize this page to see the responsive effect!</p> 
        </div>
        
        <div class="container">
        <h2>Php Database Query Results</h2>
        <table border='1' cellpadding='5'>
            <tr><th>ProductID</th><th>Code</th><th>Description</th>
                <th align="right">Cost</th></tr>
            <?php foreach( $result as $product ) {
            ?>
                  <tr><td><?php echo $product['ProductID']; ?></td>
                      <td><?php echo $product['ProductCode']; ?></td>
                      <td><?php echo $product['ProductDescription']; ?></td>
                      <td align="right">
                          $<?php echo number_format($product['ProductPrice']); ?></td>
                  </tr>
            <?php  }  // End of foreach loop ?>
        </table>
        <br><br><?php echo $message?>
        </div>
    </body>
</html>
