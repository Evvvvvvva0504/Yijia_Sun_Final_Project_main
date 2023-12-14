<?php 
////// check any variable exists or not

if (! isset($_POST['username'], $_POST['email'], $_POST['password'])) { // PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
    exit('Empty Field(s)');
}

////// check any variable is valid or not

    // first, check the username is empty or not
if (empty($_POST['username'])) {
    exit('Username is required.');
}

    // second, check the email is a valid email or not
if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // filter_var is a PHP function used to filter and examine data using the assigned filter. In this case, the filter is FILTER_VALIDATE_EMAIL, which can validate if the input is an effective email address. It returns false if it is NOT. filter_var syntax: filter_var(variable, filter, options);.
    exit('Valid email is required.');
}

    // third, check the password is 
    // (1) at least 8 characters or not
if (strlen($_POST['password']) < 8) {
    exit('Password must be at least 8 characters.');
}
    // (2) contains at least one letter or not
if (! preg_match('/[a-z]/i', $_POST['password'])) { // preg_match is a PHP function used to check whether a string matches a specified regular expression. Regular expressions are powerful tools for defining patterns and searching for those patterns within text. It returns false if it doesn't match
    exit('Password must contain at least one letter.'); // "/[a-z]/i" is a regular expression used to match any single letter in a string, regardless of case sensitivity.
}
    //(3) contains at least one number or not
if (! preg_match('/[0-9]/', $_POST['password'])) {
    exit('Password must contain at least one number.');
}

    // last, check the confirmPassword is equal to the password or not
if ($_POST['password'] !== $_POST['confirmPassword']) {
    exit('Passwords must match');
}

////// hide the password from the server side -- using password_hash

$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT); // define a new variable password_hash to store the hashed password

////// require the database file: get what the file passed returns and assign it to a variable

$mysqli = require __DIR__.'/php-database.php'; // using __DIR__ function to get the directory of the current file

////// insert a new record into the user table
    
    // SQL statement: a powerful database searching and operating language, used to interact with any Relational Database Management System. 
    // It has four typical types: (1) SELECT 从数据库中检索数据 (2) INSERT 将新数据插入到数据库表 (3) UPDATE 更新表中已有的数据 (4) DELETED 从表中删除数据
$sql = 'INSERT INTO users (username, email, password_hash)
        VALUE (?, ?, ?)'; // id doesn't need to be specified as it is automatically inserted; values are represented as placeholders

$stmt = $mysqli->stmt_init(); // ->stmt_init is a method call on the $mysqli object. The stmt_init() method is used to initialize a new MySQLi statement object. A statement object is prepared for the execution of a SQL statement.

if (! $stmt->prepare($sql)) { // pre-process the $sql to AVOID BEING ATTACKED
    exit('SQL error: '.$mysqli->error);
} 

    // after preparation, we can bind values to the placeholder characters
$stmt->bind_param("sss", $_POST['username'], $_POST['email'], $password_hash); // call the bind_param method on the statement object; 'sss' indicates that it is THREE string value

    // execute the statement
if ($stmt->execute()) {

////// redirect to another webpage to tell users that they are successfully signed up
    
    header('Location: home-signup-success.html');
    exit; // exit the script immediately once sending the header

} else {

////// or return error if duplicated email happens
    
    exit($mysqli->error.' '.$mysqli->errno); 

}

// print_r($_POST);
// var_dump($password_hash); // var_dump is similar to echo, but it displays structured information (type and value) about one or more variables. The function provides detailed information about a variable, array, or object.
?>