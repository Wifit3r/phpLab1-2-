<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index = $_POST["id"];
    $person = [
        "Name" => htmlspecialchars($_POST["name"]),
        "Sex" => htmlspecialchars($_POST["sex"]),
        "BirthYear" => htmlspecialchars($_POST["bYear"]),
        "Education" => htmlspecialchars($_POST["Education"]),
        "Specialization" => htmlspecialchars($_POST["spec"]),
        "DateOfAccounting" => htmlspecialchars($_POST["acc"]),
    ];
    var_dump($_SESSION["EmploymentCenter"][$index]);
    $_SESSION["EmploymentCenter"][$index] = [];
    $_SESSION["EmploymentCenter"][$index] = $person;
    var_dump($_SESSION["EmploymentCenter"][$index]);

    header("Location: /");
    exit();
}
