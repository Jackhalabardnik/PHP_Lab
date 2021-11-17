<div>
<h2>Dane odebrane z formularza:</h2>
<h3> Foreach </h3>
<?php
foreach($_REQUEST as $key=>$value) {
    if($value)
    {
        if(is_array($value))
        {
            $text = "";
            foreach($value as $val)
            {
                $text .= htmlspecialchars(trim($val))." "; 
            }
            echo "Język(i): $text <br />";
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

<h3> Implode </h3>
<?php
foreach($_REQUEST as $key=>$value) {
    if($value)
    {
        if(is_array($value))
        {
            $var = htmlspecialchars(trim(implode(", ", $value)));
            echo "Język(i): $var <br />";
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
<p><a href='formularze3.php'>Powrót do formularza</a></p>
</div>