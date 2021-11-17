<div>
<h2>Dane odebrane z formularza:</h2>
<h3> Tablica _REQUEST </h3>
<?php
foreach($_REQUEST as $key=>$value) {
    if($value)
    {
        if(is_array($value))
        {
            $var = htmlspecialchars(trim(implode(", ", $value)));
            echo "Język: $var <br />";
        }
        else
        {
            echo htmlspecialchars(trim($key))." = ".htmlspecialchars(trim($value))." <br />";
        }
        
    }
    else
    {
        echo "Brak elementu ".htmlspecialchars(trim($key))." w podanym formularzu<br>";
    }
    }
?>

<h3> Tablica _GET </h3>
<?php
foreach($_GET as $key=>$value) {
    if($value)
    {
        if(is_array($value))
        {
            $var = htmlspecialchars(trim(implode(", ", $value)));
            echo "Język: $var <br />";
        }
        else
        {
            echo htmlspecialchars(trim($key))." = ".htmlspecialchars(trim($value))." <br />";
        }
        
    }
    else
    {
        echo "Brak elementu ".htmlspecialchars(trim($key))." w podanym formularzu<br>";
    }
    }
?>

<h3> Tablica _POST </h3>
<?php
foreach($_POST as $key=>$value) {
    if($value)
    {
        if(is_array($value))
        {
            $var = htmlspecialchars(trim(implode(", ", $value)));
            echo "Język: $var <br />";
        }
        else
        {
            echo htmlspecialchars(trim($key))." = ".htmlspecialchars(trim($value))." <br />";
        }
        
    }
    else
    {
        echo "Brak elementu ".htmlspecialchars(trim($key))." w podanym formularzu<br>";
    }
    }
?>

<h2>Vardump </h2>
<h3> _REQUEST </h3>
<?php var_dump($_REQUEST); ?>
<h3> _GET </h3>
<?php var_dump($_GET); ?>
<h3> _POST </h3>
<?php var_dump($_POST); ?>

<p><a href='formularze2.html'>Powrót do formularza</a></p>
</div>