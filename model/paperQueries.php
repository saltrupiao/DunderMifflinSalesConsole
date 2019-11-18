function insert($paper) {
    global $db;
    
    $query = 'INSERT INTO paper
                (PPR_TYPE,PPR_SIZE,PPR_COLOR,PPR_WEIGHT,PPR_IMG,PPR_QOH,
                PPR_PRICE) 
              VALUES 
                (:pprType,:pprSize,:pprColor,:pprWeight,:pprImg,:pprState,
                :pprPrice)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprType', $paper->getPprType());
        $statement->bindValue(':pprSize', $paper->getPprSize());
        $statement->bindValue(':pprColor', $paper->getPprColor());
        $statement->bindValue(':pprWeight', $paper->getPprWeight());
        $statement->bindValue(':pprImg', $paper->getPprImg());
        $statement->bindValue(':pprQOH', $paper->getPprQOH());
        $statement->bindValue(':pprPrice', $paper->getPprPrice());
        $statement->execute();
        $statement->closeCursor();
        
        // Get the last product ID that was inserted
        $ppr_id = $db->lastInsertId();
        return $ppr_id;
    } catch (PDOException $e) {
        exit;
    }
}

function update($paper) {
    global $db;
    $query = 'UPDATE paper
              SET PPR_TYPE = :pprType,
                  PPR_SIZE = :pprSize,
                  PPR_COLOR = :pprColor,
                  PPR_WEIGHT = :pprWeight,
                  PPR_IMG = :pprImg,
                  PPR_QOH = :pprQOH,
                  PPR_PRICE = :pprPrice,
              WHERE PPR_ID = :pprID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprID', $paper->getPprID());
        $statement->bindValue(':pprType', $paper->getPprType());
        $statement->bindValue(':pprColor', $paper->getPprColor());
        $statement->bindValue(':pprWeight', $paper->getPprWeight());
        $statement->bindValue(':pprImg', $paper->getPprImg());
        $statement->bindValue(':pprState', $paper->getPprState());
        $statement->bindValue(':pprPrice', $paper->getPprPrice());
        $statement->bindValue(':pprStreet', $paper->getPprStreet());
        $statement->bindValue(':pprZipcode', $paper->getPprZipcode());
        $statement->bindValue(':pprLstMod', $paper->getPprLstMod());
        $row_count = $statement->execute();
        $statement->closeCursor();
        
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete($pprID) {
    global $db;
    $query = 'DELETE FROM paper WHERE PPR_ID = :pprID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':pprID', $pprID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}
function findPprColor($pprColor) {
    global $db;
    $query = 'SELECT PPR_ID FROM paper 
              WHERE PPR_COLOR = :$pprColor'
    try {
        $statement - $db->prepare($query);
        $statement->bindValue(':pprColor',$pprColor->getPprColor());
        $row_count = $statement->execute();
        $statement->closeCursor();

        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}