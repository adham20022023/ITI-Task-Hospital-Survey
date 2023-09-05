<?php    session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
    <title>Survey Result</title>
</head>
<body>
<div class="container" id="<?php echo isset($_SESSION['color']) ? $_SESSION['color'] : ''; ?>">
    <?php
    if (isset($_COOKIE['already_survey'])) {
        $_SESSION['color']='yellow';
        echo "<h1>Notice</h1>";
        echo "<p>User Can't Submit Another Response</p>";
        // echo $_SESSION['color'];// will return yellow always
        exit();
    } else {
        $message1 = $_SESSION['m1'];
        $message2 = $_SESSION['m2'];
        setcookie('already_survey', true, time() + 3600); // one hour
        echo "<h1>Survey Result</h1>";
        echo "<p>$message1</p>";
        echo "<p>$message2</p>";
        $_SESSION['color']='yellow';
        // echo $_SESSION['color'];// return brown or blue

    }
    ?>
</div>
</body>
</html>
