
<!DOCTYPE html>
<html>
<head>
    <title>Student Email Lookup</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>

    <h1>Student Email Lookup</h1>

    <p>Your Name: Dominique Cronier</p>

    <p>Current Date: <?php echo date("F j, Y"); ?></p>

    <form action="results.php" method="POST">
        <label for="email">Student Email Address:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
