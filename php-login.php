<?php
$is_invalid = false;

////// detect if the form has been submitted: check the request method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    ////// check that the information submitted matches one of the records in the database
        
        // so we need to first, connect to the database by requiring the php-database.php file
    $mysqli = require __DIR__ . '/php-database.php';

        // next, write the sql to select a record based on the email
        // this time, insert the value for the email directly into the sql (no prepared statement step)
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'", // sringtf is a PHP function for formatting strings based on a specified format. % means insert what behind into this position where % stays. s defines the type of the insertion: a string
            $mysqli->real_escape_string($_POST['email'])); // to escape the value coming from the form to avoid a sql injection attack
    
        // third, execute the sql -- send the sql to the database to search it
    $result = $mysqli->query($sql); // query  is a method call on the $mysqli object. The query method is used to execute a SQL query. It takes a string containing the SQL query as its parameter. This line of code sends a SQL query to the MySQL database for execution using the MySQLi extension and returns a result set (if the query produces one).

    ////// get the data from the result variable
    
    $user = $result->fetch_assoc(); // fetch_assoc method will return the record if one is found as an associative array

    ////// verify the password
    
    if ($user) {
        if (password_verify($_POST['password'], $user['password_hash'])) { // password_verify will return true if match and false if not
            
            ////// if password passes, users are logged in successfully, we can store their values in the session
            
            session_start();

            session_regenerate_id(); // to protect the code from a session fixation attack

            $_SESSION['user_id'] = $user['id']; // store values in the session super global persist across requests 

            header("Location: home-login-success.php"); // head to the index page the show information
            exit;

        } else {
            echo "Incorrect email/password combination.";
        }
    }
}

// add this: if we reach this point, that means, the form has been submitted, but either the email or password is invalid
$is_invalid = true;

?>