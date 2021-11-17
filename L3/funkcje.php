<?php

<<<<<<< HEAD
function show()
{
    print str_replace("\n", "<br>", file_get_contents($_SERVER['DOCUMENT_ROOT']."/PHP/L3/data/dane.txt"));
}

function save()
{
    $dane = "";
    foreach($_REQUEST as $key=>$value) {
        if($value && $key != "button")
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
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/PHP/L3/data/dane.txt", $dane, FILE_APPEND);
}

function showLanguage($language)
{
    $dane = "";
    $arr = file($_SERVER['DOCUMENT_ROOT']."/PHP/L3/data/dane.txt");
    foreach($arr as $key=>$value)
    {
        if(strpos($value, $language) !== false)
        {
            $dane .= $value;
        }
    }
    print str_replace("\n", "<br>", $dane);
=======
function add()
{
    $str = "";
    foreach($_REQUEST as $key=>$value) {

        if($key == "submit")
        {
            continue;
        }

        if($value)
        {
            if(is_array($value))
            {
                $str .= htmlspecialchars(trim(implode(",", $value)));
            }
            else
            {
                $str .= htmlspecialchars(trim($value));
            }
            $str .= " ";
        }
    }

    $str .= "\n";

    echo $str;

    file_put_contents("dane.txt", $str, FILE_APPEND);
}

function show()
{
    $arr = file("dane.txt");
    foreach($arr as $val)
    {
        $str .= $val."<br>";
    }
    echo $str;
}

function show_only($name)
{
    $str = "";
    $arr = file("dane.txt");
    foreach($arr as $val)
    {
        if(strpos($val, $name) !== false)
        {
            $str .= $val."<br>";
        }
    }
    echo $str;
>>>>>>> L3
}

function parse()
{
<<<<<<< HEAD
   switch($_REQUEST["button"])
   {
       case 'Zapisz': save(); break;
       case 'Pokaż': show(); break;
       case 'Java': showLanguage("Java"); break;
       case 'PHP': showLanguage("PHP"); break;
       case 'CPP': showLanguage("CPP"); break;
       case '_SERVER': var_dump($_SERVER); break;
   }
=======
    switch($_REQUEST['submit'])
    {
        case 'Zapisz': add(); break;
        case 'Pokaz': show(); break;
        case 'PHP': show_only("PHP"); break;
        case 'CPP': show_only("CPP"); break;
        case 'Java': show_only("Java"); break;
    }
>>>>>>> L3
}

?>