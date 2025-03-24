<?php 
    session_start();
    $message = $_SESSION['message'] ?? '';
    session_unset(); 
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Detector</title>
</head>
<body>
    <form action="process_name.php" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name... ">
        <input type="submit" name="process" value="Enter">
    </form>
    <?php echo $message; ?>
</body>
</html>