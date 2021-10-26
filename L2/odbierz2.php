<div>
<h2>Dane odebrane z formularza:</h2>
<?php
foreach($_REQUEST as $key=>$value) {
    if($value)
    {
        echo htmlspecialchars(trim($key))." = ".htmlspecialchars(trim($value))." <br />";
    }
    else
    {
        echo "Brak elementu ".htmlspecialchars(trim($key))." w podanym formularzu<br>";
    }
    }
?>
<p><a href='formularze2.html'>Powrót do formularza</a></p>
</div>