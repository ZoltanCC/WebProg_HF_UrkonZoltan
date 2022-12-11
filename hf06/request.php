<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["firstName"])) {
        echo "First-name is missing";
        return;
    }
    if (!isset($_POST["lastName"])) {
        echo "Last-name is missing";
        return;
    }
    if (!isset($_POST["email"])) {
        echo "email is missing";
        return;
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "invalid email address";
        return;
    }
    if (!isset($_POST["terms"])) {
        echo "Accept the T&C first.";
        return;
    }
    if (!isset($_POST["attend"])) {
        echo "Select at least 1 event";
        return;
    }
    // All the errors handled above (return signed)
    echo "First-name: " . $_POST["firstName"] . "<br>" .
        "Last-name: " . $_POST["lastName"] . "<br>" .
        "Email-address: " . $_POST["email"] . "<br>" .
        "T-Shirt size: " . $_POST["tshirt"] . "<br>" .
        "Events: <br>";
    foreach ($_POST["attend"] as $v) {
        echo $v;
    }
}
?>