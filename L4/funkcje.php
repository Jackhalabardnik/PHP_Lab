<?php

function show()
{
    print str_replace("\n", "<br>", file_get_contents("data/dane.txt"));
}

function showLanguage($language)
{
    $dane = "";
    $arr = file("data/dane.txt");
    foreach($arr as $key=>$value)
    {
        if(strpos($value, $language) !== false)
        {
            $dane .= $value;
        }
    }
    print str_replace("\n", "<br>", $dane);
}

function validate()
{
    $args = ['nazwisko' => ['filter' => FILTER_VALIDATE_REGEXP,
                            'options' => ['regexp' => '/^[A-ZÓŻŹĆŚŃŁĘĄ]{1}[a-ząęłńśćźżó]{1,25}$/']                            
                            ],  
            'imie' => ['filter' => FILTER_VALIDATE_REGEXP,
                            'options' => ['regexp' => '/^[A-ZÓŻŹĆŚŃŁĘĄ]{1}[a-ząęłńśćźżó]{1,25}$/']                            
                            ],         
            'wiek' => ['filter' => FILTER_VALIDATE_REGEXP,
                            'options' => ['regexp' => '/^[1-9][0-9]?$/']                            
                            ],
            'kraj' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'email' => FILTER_VALIDATE_EMAIL,
            'jezyki' => ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
                        'flags' => FILTER_REQUIRE_ARRAY],
            'platnosc' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
            ];
    $dane = filter_input_array(INPUT_GET, $args);
    $errors = ""; 
    foreach ($dane as $key => $val) {
        if ($val === false or $val === NULL) {
            $errors .= $key . " ";
        }
    }
    if ($errors === "") {
        put_into_file("data/dane.txt", $dane);
    }
    else 
    {
        echo "<br>Nie poprawnie dane: " . $errors;
    }

}

function put_into_file($filepath, $data_array)
{
    $dane = "";
    foreach($data_array as $key=>$value) {
        if($value)
        {
            if(is_array($value))
            {
               $dane .= htmlspecialchars(trim(implode(", ", $value))) . " ";
            }
            else
            {
                $dane .= htmlspecialchars(trim($value)) . " ";
            }
        }
    }
    $dane .= "\n";
    file_put_contents($filepath, $dane, FILE_APPEND);

    echo "Dodałem następujcącą zawartość: ".$dane;
}

function save()
{
    echo "<h3>Dodawanie do pliku:</h3>";
    validate();
}

function stats()
{
    $dane = "";
    $arr = file("data/dane.txt");
    $under18 = 0;
    $over50 = 0;
    foreach($arr as $key=>$value)
    {
        $array = explode(" ", $value);
        if ($array[2] < 18)
        {
            $under18++;
        }
        if ($array[2] >= 50)
        {
            $over50++;
        }
    }
    echo "Liczba wszystkich zamówień: ".count($arr);
    echo "<br>Liczba zamówień od osób w wieku < 18 lat: ".$under18;
    echo "<br>Liczba zamówień od osób w wieku > 50 lat: ".$over50;
}

function parse($input)
{
   switch($input)
   {
       case 'Zapisz': save(); break;
       case 'Pokaż': show(); break;
       case 'Java': showLanguage("Java"); break;
       case 'PHP': showLanguage("PHP"); break;
       case 'CPP': showLanguage("CPP"); break;
       case 'Statystyki': stats(); break;
   }
}

?>