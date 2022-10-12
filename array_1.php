<?php

    $num1 = [1,2,3,4];
    $num2 = [4,3,2,1];

    echo "Pilihan matriks";
    echo "\n";
    echo "1.Penjumlahan";
    echo "\n";
    echo "2.Pengurangan";
    echo "\n";
    echo "3.Perkalian";
    echo "\n";


    $a = readline('Masukkan pilihan : ');

    if ($a == 1) {
        for ($i=0; $i < count($num1); $i++) { 
            echo "|".$num1[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "+";
        echo "\n";
        for ($i=0; $i < count($num2); $i++) { 
            echo "|".$num2[$i]."|";
            if (($num2[$i] - 1) == (count($num2) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "=";
        echo "\n";
        $hasil = array();
        for ($i=0; $i < count($num2); $i++) { 
            $hasil2 = $num1[$i] + $num2[$i];
            array_push($hasil,$hasil2); 
        }
        for ($i=0; $i < count($hasil); $i++) { 
            echo "|".$hasil[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
    } elseif ($a == 2) {
        for ($i=0; $i < count($num1); $i++) { 
            echo "|".$num1[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "-";
        echo "\n";
        for ($i=0; $i < count($num2); $i++) { 
            echo "|".$num2[$i]."|";
            if (($num2[$i] - 1) == (count($num2) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "=";
        echo "\n";
        $hasil = array();
        for ($i=0; $i < count($num2); $i++) { 
            $hasil2 = $num1[$i] - $num2[$i];
            array_push($hasil,$hasil2); 
        }
        for ($i=0; $i < count($hasil); $i++) { 
            echo "|".$hasil[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
    } elseif ($a == 3) {
        for ($i=0; $i < count($num1); $i++) { 
            echo "|".$num1[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "*";
        echo "\n";
        for ($i=0; $i < count($num2); $i++) { 
            echo "|".$num2[$i]."|";
            if (($num2[$i] - 1) == (count($num2) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "=";
        echo "\n";
        $hasil = array();
        for ($i=0; $i < count($num2); $i++) { 
            $hasil2 = $num1[$i] * $num2[$i];
            array_push($hasil,$hasil2); 
        }
        for ($i=0; $i < count($hasil); $i++) { 
            echo "|".$hasil[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
    }
echo "\n";
?>