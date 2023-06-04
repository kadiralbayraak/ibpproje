<?php

$Page = "rooms";
include("inc/head.php");


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = new mysqli('localhost', 'root', '', 'hotel');
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Creating table
$sql_create_table = "CREATE TABLE IF NOT EXISTS rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(100) NOT NULL
)";

if ($conn->query($sql_create_table) === FALSE) {
    echo "Error, table not created: " . $conn->error;
    $conn->close();
    exit;
}

// Inserting data
$sql_insert_data = "INSERT INTO rooms (name, price, image)
VALUES ('King Room', '5000', 'images/kraldairesi.jpg'),
       ('Single Room', '1000', 'images/singleroom.jpg'),
       ('Double Room', '2000', 'images/doubleroom.jpg'),
       ('Dublex Room', '3000', 'images/dublexroom.jpg')";



$conn->close();


?>

<!-- Menu Sec -->

<section class="menu" id="menu">
    <h1>Our Rooms</h1>
    <!-- Box-1  -->
    <div class="menu-container">
        <div class="menu-box">
            <div class="box-img">
                <img src="images/kraldairesi.jpg" alt="">
            </div>
            <h3>King Room</h3>
            <h2>$ 5000</h2>
            <a href="rent.php" class="btn">Rent Now!</a>
        </div>
    </div>

    <!-- Box-2  -->
    <div class="menu-container2">
        <div class="menu-box">
            <div class="box-img">
                <img src="images/singleroom.jpg " alt="">
            </div>
            <h3>Single Room</h3>
            <h2>$ 1000</h2>
            <a href="rent.php" class="btn">Rent Now!</a>
        </div>
    </div>

    <!-- Box-3  -->
    <div class="menu-container3">
        <div class="menu-box">
            <div class="box-img">
                <img src="images/doubleroom.jpg" alt="">
            </div>
            <h3>Double Room</h3>
            <h2>$ 2000</h2>
            <a href="rent.php" class="btn">Rent Now!</a>
        </div>
    </div>


    <!-- Box-4  -->
    <div class="menu-container4">
        <div class="menu-box">
            <div class="box-img">
                <img src="images/dublexroom.jpg" alt="">
            </div>
            <h3>Dublex Room</h3>
            <h2>$ 3000</h2>
            <a href="rent.php" class="btn" target="_blank">Rent Now!</a>
        </div>
    </div>

</section>

<?php
include("inc/footer.php");

?>

