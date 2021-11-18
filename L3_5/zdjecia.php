<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zdjęcia</title>
</head>
<body>
<?php

function saveFile()
{
    $random = uniqid('img_'); //wygenerowanie losowej wartości 
    $path = './zdjecia/'.$random . '.jpg';
    move_uploaded_file($_FILES["zdjecie"]["tmp_name"], $path);
    
    list($width, $height) = getimagesize($path); //pobranie rozmiarów obrazu

    $wys  = $_POST['wys']; //wysokość preferowana przez użytkownika 
    $szer = $_POST['szer']; //szerokość preferowana przez użytkownika 
    
    $skalaWys = 1; 
    $skalaSzer = 1; 
    $skala = 1; 
    if ($width > $szer) $skalaSzer = $szer / $width; 
    if ($height > $wys) $skalaWys = $wys / $height; 
    if ($skalaWys <= $skalaSzer) $skala = $skalaWys; 
    else $skala = $skalaSzer; 
    
    //ustalenie rozmiarów miniaturki tworzonego zdjęcia: 
    $newH = $height * $skala; 
    $newW = $width * $skala;

    $obraz = imagecreatefromjpeg($path);
    $miniaturka = imagescale($obraz, $newW, $newH);
    $m_path = "./miniaturki/" . "min_" . $random . ".jpg";
    imagejpeg($miniaturka, $m_path);
    header('location:zdjecia.php?pic='.$random);
}

function has_errors()
{
    return $_FILES['zdjecie']['type'] !== 'image/jpeg' || !is_uploaded_file($_FILES['zdjecie']["tmp_name"]) || !isset($_POST["wys"]) || ($_POST["wys"] == "") || !isset($_POST["szer"]) || ($_POST["szer"] == "");
}

if(isset($_GET['pic']) && !empty($_GET['pic']))
{
    echo '<a href="./zdjecia/' . $_GET['pic'] . '.jpg">Zdjęcie</a><br/>'; 
    echo '<a href="./miniaturki/min_' . $_GET['pic'] . '.jpg">  
        Miniatura</a><br/><br/>'; 
    echo '<a href="zdjecia.html">Powrót</a><br>';
}
else if(isset($_POST['zapisz']) && $_POST['zapisz'] == 'Zapisz')
{
    if(has_errors())
    {
        header("location:zdjecia.html");
    }
    else
    {
        saveFile();
    }
}

foreach (scandir("./zdjecia") as $obrazy) {
    $nazwa = pathinfo($obrazy)["filename"];
    echo "<a href='./zdjecia/" . $nazwa . ".jpg'><img src='./miniaturki/min_" . $nazwa . ".jpg' alt=''></a>";
}
echo "W galerii jest aktualnie " . (count(scandir("./zdjecia"))-2) . " zdjęć</h3>";

?>
</body>
</html>