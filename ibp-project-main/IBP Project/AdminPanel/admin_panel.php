<?php

$Admin = "admin_panel";
include("adminHead.php");

?>

    <section class="manage-orders" id="manage-orders">

        <div>
        <h1 class="rent_list">Rent List</h1>
        </div>

        <!-- List all orders here -->
        <div class="rent-list">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hotel";

            $conn = new mysqli('localhost', 'root', '', 'hotel');
            if ($conn->connect_error) {
                die("Database connection failed: " . $conn->connect_error);
            }

            // Retrieve orders from the database
            $sql = "SELECT * FROM rent";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {


                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Guest Name</th>";
                echo "<th>Phone Number</th>";
                echo "<th>Room Type</th>";
                echo "<th>Number of Guest</th>";
                echo "<th>Rent Date</th>";
                echo "<th>Address</th>";
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['guest_name'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['room_type'] . "</td>";
                    echo "<td>" . $row['number_of_guest'] . "</td>";
                    echo "<td>" . $row['rent_date'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

            } else {
                echo "No orders found.";
            }

            $conn->close();
            ?>
        </div>
    </section>


<?php
include("adminFooter.php");
?>