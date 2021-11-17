<div>
<h2>Dane odebrane z formularza:</h2>
<h3> Foreach </h3>
<?php
$is_client_data_good = true;
$h_link_data = "";

if (isset($_REQUEST['nazwisko'])&&($_REQUEST['nazwisko']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['nazwisko']));
    $h_link_data .= "nazwisko=$var";
}
else 
{
    $is_client_data_good = false;
    echo "Nie wpisano nazwiska <br />";
}

if (isset($_REQUEST['imie'])&&($_REQUEST['imie']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['imie']));
    $h_link_data .= "&imie=$var";
}
else 
{
    $is_client_data_good = false;
    echo "Nie wpisano imienia <br />";
}

if (isset($_REQUEST['wiek'])&&($_REQUEST['wiek']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['wiek']));
    if(is_numeric($var))
    {
        $h_link_data .= "&wiek=$var";
    }
    else {
        $is_client_data_good = false;
        echo "Wiek nie jest liczbą <br />";
    }
}
else 
{
    $is_client_data_good = false;
    echo "Nie wpisano wieku <br />";
}

if (isset($_REQUEST['kraj'])&&($_REQUEST['kraj']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['kraj']));
    $h_link_data .= "&kraj=$var";
}
else 
{
    $is_client_data_good = false;
    echo "Nie wybrano kraju <br />";
}

if (isset($_REQUEST['email'])&&($_REQUEST['email']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['email']));
    $h_link_data .= "&email=$var";
}
else 
{
    $is_client_data_good = false;
    echo "Nie wpisano emaila <br />";
}


if (isset($_REQUEST['jezyki'])&&($_REQUEST['jezyki']!="")) {
    $var = htmlspecialchars(trim(implode(", ", $_REQUEST['jezyki'])));
    echo "Język: $var <br />";
}
else 
{
    $is_client_data_good = false;
    echo "Nie wybrano języka <br />";
}

if (isset($_REQUEST['platnosc'])&&($_REQUEST['platnosc']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['platnosc']));
    echo "Metoda płatności: $var <br />";
}
else 
{
    $is_client_data_good = false;
    echo "Nie wybrano metody płatności <br />";
}

if($is_client_data_good)
{
    echo "Link do danych: <a href=\"klient.php?$h_link_data\"> <h2>Dane klienta</h2> </a></br>";
}
else 
{
    echo "<h2>Nieprawidłowe dane, wróć do formularza i popraw!</h2>"; 
}

?>

<p><a href='formularze4.php'>Powrót do formularza</a></p>
</div>