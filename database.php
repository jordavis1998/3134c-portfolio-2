<?php
    // Server
    $server = "localhost";

    // Username
    $username = "root";

    // Password
    $password = "";

    // Database
    $database = "info";

    // Global connection
    $connection = null;

    function connect() {
        global $server;
        global $username;
        global $password;
        global $database;
        global $connection;

        
        if($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function salesTable() {
        // Use global $connection locally.
        global $connection;

         
        if($connection != null) {
            
            $query = "SELECT `first_name`, `last_name`, `city`, state, `zip_code` FROM `customers`;";
            $results = mysqli_query($connection, $query);


            // Start the HTML table.
            echo("<table><tbody>");

            
            while($row = mysqli_fetch_assoc($results)) {
                // Start the row.
                echo("<tr>");
                echo("<td>");
                echo($row ["first_name"]);
                echo($row ["last_name"]);
                echo($row ["city"]);
                echo($row ["state"]);
                echo($row["zip_code"]);
                echo("</td>");
                // End the row.
                echo("</tr>");
            }

            // End the HTML table.
            echo("</tbody></table>");
        }
    }

    function updateTable() {
        // Use the global $connection.
        global $connection;
        
        if(isset($_POST["customer_id"]) &&
           isset($_POST["first_name"]) &&
           isset($_POST["last_name"]) &&
           isset($_POST["city"]) &&
           isset($_POST["state"])) {

        
            $firstName = htmlspecialchars($_POST["first_name"]);
            $lastName = htmlspecialchars($_POST["last_name"]);
            $state = htmlspecialchars($_POST["state"]);
            $city = htmlspecialchars($_POST["city"]);
            
            $customerId = intval($_POST["customer_id"]);

            
            if($connection != null) {
                
                $results = mysqli_query($connection, "INSERT INTO customers (customer_id, first_name, last_name, city, state) VALUES({$customerId}, '{$firstName}', '{$lastName}', '{$city}', '{$state}')");
            }
        }
    }

    function close() {
        
        global $connection;


        if($connection != null) {
            // Close the connection.
            mysqli_close($connection);
        }
    } 
?>