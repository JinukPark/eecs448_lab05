<?php
$mysqli = new mysqli("mysql.eecs.ku.edu","djoseph", "my_user", "my_password", "jpark83");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (isset($_POST['id']) && $_POST['id'] != "") {
    $id    = $_POST['id'];
    $query = "INSERT INTO Users (
                user_id
                ) VALUES (
                '$id'
                )";
    if ($result = $mysqli->query($query)) {
        echo "Good";
    } else {
        echo "Already exist";
    }
    $mysqli->close();
} else {
    echo "Empty input";
}
?>
