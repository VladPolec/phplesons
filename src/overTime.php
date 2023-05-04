<?php
$array = [
    "teacher" => [
        ["subject" => "math", "age" => 33, "name" => "Eva"],
        ["subject" => "math", "age" => 34, "name" => "Eva1"],
        ["subject" => "adadsdf", "age" => 43, "name" => "a"],
        ["subject" => "boilogy", "age" => 500, "name" => "b"],
    ],
    "student" => [
        ["name" => "Steav", "age" => 16],
        ["name" => "Jack", "age" => 17],
        ["name" => "Adam", "age" => 16],
        ["name" => "tom", "age" => 18]

    ]
];


echo "Завдання 1<br/>";
foreach ($array as $key => $value) {
    if ($key == "teacher") {
        foreach ($value as $key1 => $value1) {
            if ($value1["age"] >= 40) {
                echo "Name = " . $value1["name"] . ", Age = " . $value1["age"] . "<br/>";
            }
        }
    }
}
echo "<br/>Завдання 2<br/>";
foreach ($array as $key => $value) {
    if ($key == "teacher") {
        foreach ($value as $key1 => $value1) {
            if ($value1["subject"] == "math" && $value1["age"] >= 30 && $value1["age"] <= 45) {
                echo "Subject = " . $value1["subject"] . ", age = " . $value1["age"] . "<br/>";
            }
        }
    }
}
echo "<br/>Завдання 3<br/>";
foreach ($array as $key => $value) {
    if ($key == "teacher") {
        foreach ($value as $key1 => $value1) {
            if ($value1["subject"] !== "math") {
                echo "Subject = " . $value1["subject"]."<br/>";
            }
        }
    }
}
echo "<br/>Завдання 4<br/>";
foreach ($array as $key => $value) {
    if ($key == "teacher") {
        foreach ($value as $key1 => $value1) {
            if (strpos($value1["name"], "a") === false) {
                echo "Букви 'а' не знайдено в iменi ".$value1["name"] ."<br/>";
            } else{
                echo "Буква 'а' в iменi ". $value1["name"]."<br/>";
            }
        }
    }
}



