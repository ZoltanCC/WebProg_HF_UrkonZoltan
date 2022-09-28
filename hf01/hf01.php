<?php
echo "1. feladat:" . "<br>";
    $a = date("w");
    switch($a) {
        case 1:
            echo "Ma hétfő van";
            break;
        case 2:
            echo "Ma kedd van";
            break;
        case 3:
            echo "Ma szerda van";
            break;
        case 4:
            echo "Ma csütörtök van";
            break;
        case 5:
            echo "Ma péntek van";
            break;
        case 6:
            echo "Ma szombat van";
            break;
        case 0:
            echo "Ma vasárnap van";
            break;
    }
    echo "<br>2. feladat:" . "<br>";

    class Calculator {
        public function __construct()
        {
            
        }
        
        public function add(float $a, float $b): float {
            return $a + $b;
        }

        public function substract(float $a, float $b): float {
            return $a - $b;
        }

        public function mult(float $a, float $b): float {
            return $a * $b;
        }

        public function divide(float $a, float $b): float {
            return $a / $b;
        }

    }
    $calc = new Calculator();

    echo "<br>18 * 2 = " . strval($calc->mult(18, 2)) . "<br>";
    echo "<br>18 / 2 = " . strval($calc->divide(18, 2)) . "<br>";
    echo "<br>18 + 2 = " . strval($calc->add(18, 2)) . "<br>";
    echo "<br>18 - 2 = " . strval($calc->substract(18, 2)) . "<br>";

    echo "<br>3. feladat:" . "<br>";

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo strval($i) . " / " . strval($j) . " = " . strval($i/$j) . "<br>";
        }
    }

    echo "<br>4. feladat:" . "<br>";

    echo "<table width=270px cellspacing=0px cellpadding=0px border=1px>";
    for ($i = 1; $i < 8; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 8; $j++) {
            $tot = $i + $j;
            if ($tot%2==0) {
                echo "<td height=30px width=30px bgcolor=#fff></td>";
            }
            else {
                echo "<td height=30px width=30px bgcolor=#000></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>5. feladat:" . "<br>";

    function spongcase(string $str): string {
        $b = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if ($i % 2 == 0) {
                $b .= strtoupper($str[$i]);
            }
            else {
                $b .= strtolower($str[$i]);
            }
        }
        return $b;
    }

    echo spongcase("asfgsrgaasgad");

?>