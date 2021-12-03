<h1>Hello w lab6 :)</h1>

<?php


$mysqli = new mysqli("db", "root", "example", "lab6");

$sql = "INSERT INTO lab6 (Imie, nazwisko) VALUES('Oleh', 'Foliush')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO lab6 (Imie, nazwisko) VALUES('John', 'Cena')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO lab6 (Imie, nazwisko) VALUES('Alex', 'Bieber')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM lab6';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}


foreach ($users as $user) {
    echo "<br>";
    echo $user->Imie . " " . $user->Nazwisko ;
    echo "<br>";
}
