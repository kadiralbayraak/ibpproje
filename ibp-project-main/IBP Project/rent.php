<?php
$Page = "rent";
include("inc/head.php");


$servername = "localhost";
$username = "root";
$password = "";
$Dbname = "hotel";

// Db Connection
$conn = new mysqli('localhost', 'root', '', 'hotel');

//Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Creating table

$sql_create_table = "CREATE TABLE IF NOT EXISTS rent (
    id INT AUTO_INCREMENT PRIMARY KEY,
    guest_name VARCHAR(100) NOT NULL,
    phone_number VARCHAR(100) NOT NULL,
    room_type VARCHAR(100) NOT NULL,
    number_of_guest INT NOT NULL,
    rent_date DATE NOT NULL,
    address VARCHAR(100) NOT NULL
)";

if ($conn->query($sql_create_table) === FALSE) {
    echo "Error, table not created: " . $conn->error;
    $conn->close();
    exit;
}


// When the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guestName = $_POST['guest_name'];
    $phone_number = $_POST['phone_number'];
    $roomType = $_POST['room_type'];
    $numberOfGuest = $_POST['number_of_guest'];
    $rentDate = $_POST['rent_date'];
    $address = $_POST['address'];


//Inserting data's
    $sql = "INSERT INTO rent (guest_name, phone_number, room_type, number_of_guest, rent_date, address)
        VALUES ('$guestName','$phone_number','$roomType', '$numberOfGuest', '$rentDate', '$address' )";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Room rented successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Failed while room renting: ' . $conn->error . '</div>';
    }
}

$conn->close();
?>


<section class="order" id="order">

    <h1 class="heading">Rent Quickly</h1>

    <form action="" method="post">
        <div class="inputBox">
            <div class="input">
                <span>Your Name</span>
                <input type="text" name="guest_name" placeholder="Name" required><br>
                <span>Phone Number</span>
                <input type="number" name="phone_number" placeholder="Phone Number" required><br>
                <span>Room Type</span>
                <input type="text" name="room_type" placeholder="Room Type" required><br>
                <span>How Many</span>
                <input type="number" name="number_of_guest" placeholder="How Many Guest" required><br>
                <span>Date and Time</span>
                <input type="date" name="rent_date" required><br>
                <span>Your Address</span>
                <textarea name="address" placeholder="enter your address" cols="30" rows="10"></textarea>
            </div>
        </div>
        <button class="btn">RENT NOW</button>
    </form>
</section>


    </form>
</section>



<?php

include("inc/footer.php");

?>
