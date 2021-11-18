<?php
$jezyki = ["C", "CPP", "Java", "C#", "HTML", "CSS", "XML", "PHP", "JavaScript"];

$dane = "";
$arr = file("data/glosy.txt");
$langs = [];
foreach($arr as $key=>$value)
{
    list($k, $v) = explode(":", $value);
    $langs[$k] = trim($v);
}
foreach($_REQUEST["jezyki"] as $key)
{
    $langs[$key]++;
}

foreach($langs as $key=>$value)
{
    $dane .= $key.":".$value."\n";
}
print str_replace("\n", "<br>", $dane);

file_put_contents("data/glosy.txt", $dane);

echo("<br><h3><a href=\"ankieta.php\">Powrót do ankiety</a></h3>")

?>