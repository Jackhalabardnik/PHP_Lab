<?php

function zadanie_1()
{
    echo "<head> <title> Pierwszy skrypt w PHP </title> </head>";
    echo "<h1> Zadanie 1 </h1> <h2> Pierwszy skrypt w PHP </h2>";

    $n=5678;
    $x=10.123456789;
    echo "Domyślny format z kropką: n=".$n.", x=".$x."<br>";
    echo "Domyślny format bez kropki: n=$n, x=$x<br>";
    printf("Zaokrąglenie do liczby całkowitej: x = %d<br>", $x);
    printf("Z trzema cyframi po kropce: x = %.3f<br>", $x);
}

function zadanie_2()
{
    echo "<h1> Zadanie 2 </h1>";
    galeria(2,4);
    galeria(3,3);
    galeria(6,7);
}

function galeria($rows, $cols)
{
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $number = ($i * $cols + $j) % 10 + 1;
            echo "<img src='images/obraz$number.JPG' alt='$obraz$number.JPG' />";
        }
        echo "<br><br>";
    }
}

function zadanie_3()
{
    $int = 1234;
    $float = 567.789;
    $int_one = 1;
    $int_zero = 0;
    $bool = true;
    $string_zero = "0";
    $string = "Typy w PHP";
    $array = [1, 2, 3, 4];
    $array_empty = [];
    $array_strings = ["zielony", "czerwony", "niebieski"];
    $array_multi = ["Agata", "Agatowska", 4.67, true];
    $date_time = new DateTIme("NOW");

    echo "<h2> a) </h2>";

    print("int: $int <br>");
    print("float: $float<br>");
    print("int_one: $int_one<br>");
    print("int_zero: $int_zero<br>");
    print("bool: $bool<br>");
    print("string_zero: $string_zero<br>");
    print("string: $string<br>");
    print("array: " . count($array) . "<br>");
    print("array_empty: " . count($array_empty) . "<br>");
    print("array_strings: " . count($array_strings) . "<br>");
    print("array_multi: " . count($array_multi) . "<br>");
    print("date_time: " . $date_time->format('Y:M:D H:i:s') . "<br>");

    echo "<h2> b) </h2>";


    print("is_bool(int): " . is_bool($int) . "  <br>");
    print("is_bool(bool):" . is_bool($bool) . "<br>");

    print("is_int(int): " . is_int($int) . "  <br>");
    print("is_int(float):" . is_int($float) . "<br>");

    print("is_numeric(array): " . is_numeric($array) . "<br>");
    print("is_numeric(int_one):" . is_numeric($int_one) . "<br>");

    print("is_string(int_zero):" . is_string($int_zero) . "<br>");
    print("is_string(string):" . is_string($string) . "<br>");

    print("is_array(array): " . is_array($array) . "<br>");
    print("is_array(bool):" . is_array($bool) . "<br>");

    print("is_object(array_string): " . is_object($array_string) . "<br>");
    print("is_object(date_time): " . is_object($date_time->format('d-m-Y H:i:s')) . "<br>");

    echo "<h2> c) </h2>";

    print("1==true to ".(1 == true ? 1:0)."<br>");
    print("1===true to ".(1 === true ? 1:0)."<br>");
    print("0==\"0\" to ".(0 == "0"? 1:0)."<br>");
    print("0===\"0\" to ".(0 === "0"? 1:0)."<br>");

    echo "<h2> d) </h2>";

    echo "var_dump(array_multi):<br>";
    var_dump($array_multi);
    echo "<br>print_r(array_multi):<br>";
    print_r($array_multi);
    echo "<br>";
}


zadanie_1();
zadanie_2();
zadanie_3();