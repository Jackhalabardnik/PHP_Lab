<div>
<h2>Dane klienta odebrane z formularza:</h2>
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

<p><a href='formularze4.php'>Powrót do formularza</a></p>
</div>