<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$login_success = false;
$full_name = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if($row["username"] == $_POST["username"] &&
					$row["password"] == $_POST["password"]) {
                        $login_success = true;
                        echo "welcome";}
	}
    if ($login_success == false) {
        echo "fuck off!";
    }
} else {
    echo "0 results";
}
$conn->close();

