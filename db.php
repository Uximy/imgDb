<?php
    function connect($host, $dbuser, $dbpassword, $name)
    {
        try {
            $db = new PDO("mysql:host=$host;dbname=$name", $dbuser,$dbpassword);

            $db->query('CREATE TABLE IF NOT EXISTS pictures (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NULL , `size` INT NULL , `imagepath` VARCHAR(255) NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB');

            return $db;
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
    }
?>