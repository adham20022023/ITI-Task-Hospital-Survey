<?php
session_start();
require_once('save_data.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['q1']) && !empty($_POST['q2']) && !empty($_POST['q3']) && !empty($_POST['q4']) && !empty($_POST['q5'])) {
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $sum = $q1 + $q2 + $q3 + $q4 + $q5;

        if ($sum >= 25) {
            $_SESSION['m1'] = "Total Review Good";
            $_SESSION['m2'] = "Thank You";
            $_SESSION['color'] = "green";
        } else {
            $_SESSION['m1'] = "Total Review Bad";
            $_SESSION['m2'] = "We Will Contact You for the Bad evaluation " . $_SESSION['phone'];
            $_SESSION['color'] = 'brown';
        }
        Save_data($sum);
        header('location: result.php');
        exit();
    }
}
?>
