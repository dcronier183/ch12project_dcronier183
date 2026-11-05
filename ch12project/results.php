<!DOCTYPE html>
<html>
<head>
    <title>Student Email Lookup Results</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $conn = mysqli_connect("localhost", "root", "", "taus_data");

    if (!$conn) {
        echo "<div class='message'>Database connection failed.</div>";
    } else {

        $sql = "SELECT firstName, lastName, email FROM tbl_student WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='message'>Student found: " . $row["firstName"] . " " . $row["lastName"] . " - " . $row["email"] . "</div>";
        } else {
            echo "<div class='message'>Email not found.</div>";
        }

        mysqli_close($conn);
    }
}
?>

<a href="index.php">Go Back</a>

</body>
</html>
