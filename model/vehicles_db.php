<?php

    // Returns all vehicles and sorts by price
    function get_vehicles_by_price() {
        global $db;
        $query = 'SELECT * FROM vehicles
                  ORDER BY price DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    // Returns all vehicles and sorts by year
    function get_vehicles_by_year() {
        global $db;
        $query = 'SELECT * FROM vehicles
                  ORDER BY year DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }