<?php

    // Returns all types
    function get_types() {
        global $db;
        $query = 'SELECT * FROM types
                  ORDER BY ID DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $types = $statement->fetchAll();
        $statement->closeCursor();
        return $types;
    }

    // Gets type name
    function get_type_name($type_id) {
        global $db;
        $query = 'SELECT * FROM types
                  WHERE ID = :type_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $types = $statement->fetch();
        $statement->closeCursor();
        $type_name = $type['type'];
        return $type_name;
    }
    