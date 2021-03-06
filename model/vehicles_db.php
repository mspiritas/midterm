<?php
    function get_vehicles_by_price($price) {
        global $db;
        $query = 'SELECT * FROM vehicles
                  ORDER BY price desc';

        $statement = $db->prepare($query);
        $statement->bindValue(':price', $price);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }