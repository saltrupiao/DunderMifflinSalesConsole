<?php
function get_all() {
    global $db;
    //$query = 'SELECT client.CLI_ID FROM client JOIN agent ON (client.CLI_AGT_ID = agent.AGT_ID) JOIN CLILOYEE ON (agent.AGT_CLI_ID = employee.CLI_ID)';
    $query = 'SELECT * FROM client';
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

function insert($client) {
    global $db;

    $query = 'INSERT INTO client
                (CLI_AGT_ID,CLI_FNAME,CLI_LNAME,CLI_PHONE,CLI_EMAIL,CLI_COUNTRY,CLI_STATE,CLI_CITY,CLI_STREET,CLI_ZIPCODE) 
              VALUES 
                (:cliAgtID,:cliFname,:cliLname,:cliPhone,:cliEmail,:cliCountry,:cliState,:cliCity,:cliStreet,:cliZipcode)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':cliAgtID', $client->getCliAgtID());
        $statement->bindValue(':cliFname', $client->getCliFname());
        $statement->bindValue(':cliLname', $client->getCliLname());
        $statement->bindValue(':cliPhone', $client->getCliPhone());
        $statement->bindValue(':cliEmail', $client->getCliEmail());
        $statement->bindValue(':cliCountry', $client->getCliCountry());
        $statement->bindValue(':cliState', $client->getCliState());
        $statement->bindValue(':cliCity', $client->getCliCity());
        $statement->bindValue(':cliStreet', $client->getCliStreet());
        $statement->bindValue(':cliZipcode', $client->getCliZipcode());
        $statement->execute();
        $statement->closeCursor();

        // Get the last client ID that was inserted
        $cli_id = $db->lastInsertId();
        return $cli_id;
    } catch (PDOException $e) {
        exit;
    }

}



function update($client) {
    global $db;
    $query = 'UPDATE client
              SET CLI_AGT_ID = :cliAgtID,
                  CLI_FNAME = :cliFname,
                  CLI_LNAME = :cliLname,
                  CLI_PHONE = :cliPhone,
                  CLI_EMAIL = :cliEmail,
                  CLI_COUNTRY = :cliCountry,
                  CLI_STATE = :cliState,
                  CLI_CITY = :cliCity,
                  CLI_STREET = :cliStreet,
                  CLI_ZIPCODE = :cliZipcode
              WHERE CLI_ID = :cliID AND CLI_AGT_ID = :cliAgtID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':cliID', $client->getCliID());
        $statement->bindValue(':cliAgtID', $client->getCliAgtID());
        $statement->bindValue(':cliFname', $client->getCliFname());
        $statement->bindValue(':cliLname', $client->getCliLname());
        $statement->bindValue(':cliPhone', $client->getCliPhone());
        $statement->bindValue(':cliEmail', $client->getCliEmail());
        $statement->bindValue(':cliCountry', $client->getCliCountry());
        $statement->bindValue(':cliState', $client->getCliState());
        $statement->bindValue(':cliCity', $client->getCliCity());
        $statement->bindValue(':cliStreet', $client->getCliStreet());
        $statement->bindValue(':cliZipcode', $client->getCliZipcode());
        $row_count = $statement->execute();
        $statement->closeCursor();

        return $row_count;
    } catch (PDOException $e) {
        exit;
    }
}

function delete($cliID) {
    global $db;

    $query = 'DELETE FROM client WHERE CLI_ID = :cliID';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':cliID', $cliID);
        $row_count = $statement->execute();
        $statement->closeCursor();
        return $row_count;
    } catch (PDOException $e) {
        exit;
    }

}

?>