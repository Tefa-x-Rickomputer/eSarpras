<?php

    $db = mysqli_connect('localhost', 'root', '', 'inventorymanagement');

    function querySql($query)
        {
        global $db;

        $item = mysqli_query($db, $query);
        $items = [];

        while ($row = mysqli_fetch_assoc($item)) {
            $items[] = $row;
<<<<<<< HEAD
            }
=======
        }
>>>>>>> 880516bee257c0d9f3df967e3232ebe1487ca43a

        return $items;
        }