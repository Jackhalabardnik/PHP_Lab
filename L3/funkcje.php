<?php

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
}

function parse()
{
   switch($_REQUEST["button"])
   {
       case 'Zapisz': save(); break;
       case 'Pokaż': show(); break;
       case 'Java': showLanguage("Java"); break;
       case 'PHP': showLanguage("PHP"); break;
       case 'CPP': showLanguage("CPP"); break;
       case '_SERVER': var_dump($_SERVER); break;
   }
}

?>