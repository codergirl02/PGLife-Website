<?php

    // $db_hostname = "127.0.0.1";
    // $db_username = "root";
    // $db_password = "";
    // $db_name = "pg_booking";
    

// $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$conn = mysqli_connect("127.0.0.1", "root", "", "pg_booking");

if (!$conn){
    die("Sorry we failed to connect:  ". mysqli_connect_error());

 }
// else {
//     echo "Connection was successfull!<br>";
// }


// $table = "CREATE TABLE users (
//     id INT NOT NULL AUTO_INCREMENT,
//     email VARCHAR(100) NOT NULL ,
//     password VARCHAR(100) NOT NULL ,
//     full_name VARCHAR(100) NOT NULL ,
//     phone VARCHAR(100) NOT NULL ,
//     gender ENUM('male', 'female') NOT NULL,
//     college_name VARCHAR(100) NOT NULL ,
//     PRIMARY KEY(id)
// )";

// if ($conn -> query($table) == TRUE){
//     echo "Table user created";
// }

// $table1 = "CREATE TABLE cities (
//     id INT NOT NULL AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL ,
//     PRIMARY KEY(id)
// )";

// if ($conn -> query($table1) == TRUE){
//     echo "Table cities created";
// }

// $table2 = "CREATE TABLE properties (
//     id INT NOT NULL AUTO_INCREMENT,
//     city_id INT NOT NULL,
//     name VARCHAR(100) NOT NULL ,
//     address VARCHAR(250) NOT NULL ,
//     description LONGTEXT NOT NULL ,
//     gender ENUM('male', 'female', 'unisex') NOT NULL,
//     rent INT NOT NULL,
//     rating_clean FLOAT(2, 1) NOT NULL ,
//     rating_food FLOAT(2, 1) NOT NULL ,
//     rating_safety FLOAT(2, 1) NOT NULL ,
//     PRIMARY KEY(id),
//     FOREIGN KEY(city_id) REFERENCES cities(id)
// )";

// if ($conn -> query($table2) == TRUE){
//     echo "Table user created";
// }

// $table3 = "CREATE TABLE amenities (
//     id INT NOT NULL AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL ,
//     type VARCHAR(100) NOT NULL ,
//     icon VARCHAR(30) NOT NULL ,
//     PRIMARY KEY(id)
// )";

// if ($conn -> query($table3) == TRUE){
//     echo "Table  created";
// }

// $table4 = "CREATE TABLE properties_amenities (
//     id INT NOT NULL AUTO_INCREMENT,
//     property_id INT NOT NULL,
//     amenity_id INT NOT NULL,
//     PRIMARY KEY(id),
//     FOREIGN KEY(property_id) REFERENCES properties(id),
//     FOREIGN KEY(amenity_id) REFERENCES amenities(id)
// )";

// if ($conn -> query($table4) == TRUE){
//     echo "Table cities created";
// }

// $table5 = "CREATE TABLE testimonials (
//     id INT NOT NULL AUTO_INCREMENT,
//     property_id INT NOT NULL,
//     user_name VARCHAR(100) NOT NULL ,
//     content LONGTEXT NOT NULL,
//     PRIMARY KEY(id),
//     FOREIGN KEY(property_id) REFERENCES properties(id)
   
// )";

// if ($conn -> query($table5) == TRUE){
//     echo "Table created";
// }

// $table6 = "CREATE TABLE interested_users_properties (
//     id INT NOT NULL AUTO_INCREMENT,
//     user_id INT NOT NULL,
//     property_id INT NOT NULL,
//     PRIMARY KEY(id),
//     FOREIGN KEY(user_id) REFERENCES users(id),
//     FOREIGN KEY(property_id) REFERENCES properties(id)
   
// )";

// if ($conn -> query($table6) == TRUE){
//     echo "Table created";
// }

// $conn -> close();




// if (mysqli_connect_errno()){
//     echo "Failed to connect to MySQL! Please contact the admin.";
//     return; 
// }

//     $email=$_POST['email'];
//     $password=$_POST['password'];

//     $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

//     $result = mysqli_query($conn, $sql);
//     if (!$result) {
//         echo "Error: " .mysqli_error($conn);
//         exit;
//     }

    // $row = mysqli_fetch_assoc($result);
    // if ($row) {
    //     echo "Hello " .$row['name'] . "<br/>";
    // } else {
    //     echo "Login Failed<br/>";
    // }

    // mysqli_close($conn);
 ?>
