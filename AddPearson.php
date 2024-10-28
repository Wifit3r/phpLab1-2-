<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newPerson = [
        "id" => htmlspecialchars($_POST["id"]),
        "Name" => htmlspecialchars($_POST["name"]),
        "Sex" => htmlspecialchars($_POST["sex"]),
        "BirthYear" => htmlspecialchars($_POST["bYear"]),
        "Education" => htmlspecialchars($_POST["Education"]),
        "Specialization" => htmlspecialchars($_POST["spec"]),
        "DateOfAccounting" => htmlspecialchars($_POST["acc"]),
    ];

    array_push($_SESSION["EmploymentCenter"], $newPerson);
    header("Location: /");

    exit();
}



