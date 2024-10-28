<?php

function DisplayEmploymentCenter(): void
{
    $counter = 0;
    foreach ($_SESSION["EmploymentCenter"] as $person) {
        echo "<tr>";
        echo "<td>";
        echo $person["id"];
        echo "</td>";
        echo "<td>";
        echo $person["Name"];
        echo "</td>";
        echo "<td>";
        echo $person["Sex"];
        echo "</td>";
        echo "<td>";
        echo $person["BirthYear"];
        echo "</td>";
        echo "<td>";
        echo $person["Education"];
        echo "</td>";
        echo "<td>";
        echo $person["Specialization"];
        echo "</td>";
        echo "<td>";
        echo $person["DateOfAccounting"];
        echo "</td>";
        echo "<td>";
        echo "<button name='update' value=$counter>Редагувати</button>";
        echo "</tr>";
        $counter = $counter + 1;
    }
}