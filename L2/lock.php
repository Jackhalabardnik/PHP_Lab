
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/forms.css" type="text/css" />
    <title> Szybki kurs HTML </title>
</head>

<body>
        <header>
            <h2>Szybki kurs HTML</h2>
        </header>
        <nav>
            <div class="first_row">
                <a class="first_nav_el" href="index.html"> Podstawowe znaczniki </a>
                <a href="tabele.html"> Tworzenie tabel</a>
            </div>
            <div class="second_row">
                <div class="dropdown_trigger">
                    <a href="">Formularze </a>
                    <div class="dropdown">
                        <a href="formularze.html">Pola formularza</a>
                        <a href="obliczenia.html">Obliczenia</a>
                        <a href="kalkulator.html">Kalkulator</a>
                    </div>
                </div>
            
                <a class="last_nav_el" href="galeria.html"> Galeria</a> 
            </div>
        </nav>

        <main>
            <?php
            
            if(isset($_REQUEST['texty']))
            {
                $var1 = $_REQUEST['texty'];
                $var2 = htmlspecialchars($var1);
                echo "<h3> Bez htmlspecialchars: </h3>";
                echo "Treść to: $var1";
                echo "<h3> Z htmlspecialchars: </h3>";
                echo "Treść to: $var2";
                echo "<a href = \"lock.php\" > Powrót do formularza </a>";
            }
            else
            {
                echo"
                <h3>
                Przykładowy formularz HTML:
                </h3>
                <form action=\"lock.php\" method=\"get\">
                    <table>
                        <tr>
                            <td>
                                <label for=\"texty\">
                                    Tekst:
                                </label>
                            </td>
                            <td>
                                <input class=\"input_box\" type=\"texty\" name=\"texty\" id=\"texty\" placeholder=\"Wpisz tu\"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\">
                                <input class=\"button\" type=\"submit\" value=\"Wyślij\" />
                                <input class=\"button\" type=\"reset\" value=\"Anuluj\" />
                            </td>
                        </tr>
                    </table>
                </form>
                ";
            }
            
            ?>
            
            </main>

            <aside>
            <div class="box">
                <h3>Walidatory:</h3>
                <ul>
                    <li> <a href="http://validator.w3.org/">HTML </a></li>
                    <li> <a href="http://jigsaw.w3.org/css-validator/">CSS</a></li>
                </ul>
            </div>
            <div class="box">
                <h3>Kursy:</h3>
                <ul>
                    <li> <a href="https://www.w3schools.com/html/"> HTML </a></li>
                    <li> <a href="https://www.w3schools.com/css/"> CSS </a></li>
                    <li> <a href="https://www.w3schools.com/js/"> JS </a></li>
                    <li> <a href="https://www.w3schools.com/php/"> PHP </a></li>
                </ul>
            </div>
        </aside>
        <footer> 
            <p>
                &copy;JW
            </p>
        </footer>
</body>

</html>