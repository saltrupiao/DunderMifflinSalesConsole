<?php
function get_all() {
    global $db;
    $query = 'SELECT * FROM product';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        exit;
    }
}

function get_by_productID($productID) {
    global $db;
    $query = 'SELECT *
              FROM product
              WHERE ProductID = :productID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $productID);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        exit;
    }
}

function insert($product) {
    global $db;

    $query = 'INSERT INTO product
                 (ProductID,ProductCode,ProductDescription,ProductPrice)
              VALUES
                 (:productID,:productCode,:productDescription,:productPrice)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $product->getProductID());
        $statement->bindValue(':productCode', $product->getProductCode());
        $statement->bindValue(':productDescription', $product->getProductDescription());
        $statement->bindValue(':productPrice', $product->getProductPrice());
        $statement->execute();
        $statement->closeCursor();

        // Get the last product ID that was inserted
        $product_id = $db->lastInsertId();
        return $product_id;
    } catch (PDOException $e) {
        exit;
    }
}

function update($product) {
    global $db;
    $query = 'UPDATE product
              SET ProductCode = :productCode,
                  ProductDescription = :productDescription,
                  ProductPrice= :productPrice
              WHERE ProductID = :productID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $product->getProductID());
        $statement->bindValue(':productCode', $product->getProductCode());
        $statement->bindValue(':productDescription', $product->getProductDescription());
        $statement->bindValue(':productPrice', $product->getProductPrice());
        $row_count = $statement->execute();
        $statement->closeCursor();
        
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete($productID) {
    global $db;
    $query = 'DELETE FROM product WHERE productID = :productID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':productID', $productID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}
?>