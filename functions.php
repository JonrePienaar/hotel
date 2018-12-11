
<?php
// session_start();
// include("config.php ");
function email_update($email) {
    // Pleae make sure the below configuration will work on your system. Make any necesarry changes.
    $conn = mysqli_connect("localhost", "root", "", "hotel");
        
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM `emails` WHERE '$email' = `emails`";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if(empty($row)){
        $sql = "INSERT INTO emails (emails) VALUES ('$email');";
        $query = mysqli_query($conn, $sql);
        return true;
    }
echo("<script>alert('Your email has already been used. We will still be sending the info to your email unless spesified otherwise.')</script>");
return false;
}


// To avoid any errors run the SQL below in phpmyadmin and remove the below function and where it is called(index.php).
function createDatabase() {
    // Pleae make sure the below configuration will work on your system. Make any necesarry changes.
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
   
?>
