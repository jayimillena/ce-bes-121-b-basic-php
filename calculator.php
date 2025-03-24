<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="compute.php" method="POST">
        <label for="fnum">First number: </label>
        <input type="text" name="text_fnum" placeholder="Enter first number...">
        <label for="snum">Second number: </label>
        <input type="text" name="text_snum" placeholder="Enter second number...">
        <input type="submit" name="btn_add" value="Add">
    </form>
</body>
</html>