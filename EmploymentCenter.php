<?php

$EmploymentCenter = [
    [
        "id"=>1,
        "Name"=>"Ivanov I.I",
        "Sex"=>"Male",
        "BirthYear"=>"1990",
        "Education"=>"IT",
        "Specialization"=>"Software Engineer",
        "DateOfAccounting"=>"2012",
    ],
    [
        "id"=>2,
        "Name"=>"Petrov P.P",
        "Sex"=>"Male",
        "BirthYear"=>"1993",
        "Education"=>"Engineer",
        "Specialization"=>"Architect",
        "DateOfAccounting"=>"2015",
    ],
    [
        "id"=>3,
        "Name"=>"Petrova A.I",
        "Sex"=>"Female",
        "BirthYear"=>"1997",
        "Education"=>"Medic",
        "Specialization"=>"Surgeon",
        "DateOfAccounting"=>"2019",
    ],
    [
        "id"=>4,
        "Name"=>"Sidorov A,S",
        "Sex"=>"Male",
        "BirthYear"=>"1987",
        "Education"=>"Sport",
        "Specialization"=>"Trainer",
        "DateOfAccounting"=>"2019",
    ],
    [
        "id"=>5,
        "Name"=>"Vasilyeva O.O",
        "Sex"=>"Female",
        "BirthYear"=>"1993",
        "Education"=>"Teacher",
        "Specialization"=>"Math Teacher",
        "DateOfAccounting"=>"2019",
    ]
];

if (!isset($_SESSION["EmploymentCenter"])) {
    $_SESSION["EmploymentCenter"] = $EmploymentCenter;
}
