<div>
<h2>Dane odebrane z formularza:</h2>
<?php
if (isset($_REQUEST['nazwisko'])&&($_REQUEST['nazwisko']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['nazwisko']));
    echo "Nazwisko: $var <br />";
}
else echo "Nie wpisano nazwiska <br />";

if (isset($_REQUEST['imie'])&&($_REQUEST['imie']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['imie']));
    echo "Imie: $var <br />";
}
else echo "Nie wpisano imienia <br />";

if (isset($_REQUEST['wiek'])&&($_REQUEST['wiek']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['wiek']));
    if(is_numeric($var))
    {
        echo "Wiek: $var <br />";
    }
    echo "Wiek nie jest liczbą <br />";
}
else echo "Nie wpisano wieku <br />";

if (isset($_REQUEST['kraj'])&&($_REQUEST['kraj']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['kraj']));
    echo "kraj: $var <br />";
}
else echo "Nie wybrano kraju <br />";

if (isset($_REQUEST['email'])&&($_REQUEST['email']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['email']));
    echo "Adres email: $var <br />";
}
else echo "Nie wpisano emaila <br />";

if (isset($_REQUEST['jezyk'])&&($_REQUEST['jezyk']!="")) {
    $var = htmlspecialchars(trim(implode(", ", $_REQUEST['jezyk'])));
    echo "Język: $var <br />";
}
else echo "Nie wybrano języka <br />";

if (isset($_REQUEST['platnosc'])&&($_REQUEST['platnosc']!="")) {
    $var = htmlspecialchars(trim($_REQUEST['platnosc']));
    echo "Metoda płatności: $var <br />";
}
else echo "Nie wybrano metody płatności <br />";

?>

<p><a href='formularze.html'>Powrót do formularza</a></p>
</div>