<?php
// session_start();
    
// include("config.php ");
$email = $_POST["email"];
function email_updte($email) {
    $conn = mysqli_connect("localhost", "root", "", "hotel");
        
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM emails WHERE $email = emails;";

    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if(empty($row)){
        $sql = "INSERT INTO hotels (emails) VALUES ('$email');";
        $query = mysqli_query($conn, $sql);
        return true;
    }
echo("<script>alert('Your email has already been used. We will still be sending you the info to your email unless spesified otherwise.')</script>");
return false;
}
function createDatabase() {
    $conn = mysqli_connect("localhost", "root", "");
        
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="CREATE DATABASE hotel;
            USE hotel;
                CREATE TABLE emails(
                    id INT  AUTO_INCREMENT,
                    emails VARCHAR(155) NOT NULL,
                    PRIMARY KEY(id)
                    );";
    $query = mysqli_query($conn, $sql);
}
   

email_updte($email);





?>