<?php

echo "1. feladat<br>";

$test_array = [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'];
foreach ($test_array as $i) {
   echo $i . " " . gettype($i) . " " . strval(is_numeric($i) == true ? "Igen<br>" : "Nem<br>");
}

echo "2. feladat<br>";

$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
"Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");
$keys = array_keys($orszagok);
for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . " fővárosa " . $orszagok[$keys[$i]] . "<br>";
}

echo "3. feladat<br>";

$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

foreach ($napok as $key => $value) {
    echo $key . ": ";
    $i = 0;
    foreach($value as $nap) {
        echo $nap . ($i < 6 ? ", " : "");
        $i++;
    }
    echo "<br>";
}

echo "4. feladat<br>";

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

function atalakit(array $arr, string $mi): array {
    $result = [];
    if ($mi === "kisbetus") {
        foreach ($arr as $key => $value) {
            $result[$key] = strtolower($value);
        }
    }
    else if ($mi === "nagybetus") {
        foreach ($arr as $key => $value) {
            $result[$key] = strtoupper($value);
        }
    }
    return $result;
}

print_r(atalakit($szinek, "kisbetus"));
print_r(atalakit($szinek, "nagybetus"));


?>