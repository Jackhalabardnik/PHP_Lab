<?php 
include_once "funkcje.php";
$jezyki = ["C", "CPP", "Java", "C#", "HTML", "CSS", "XML", "PHP", "JS"]; 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Szybki kurs PHP </title>
</head>

<body>
    <main>
        <h3>
            Formularz PHP:
        </h3>
        <form action="formularz.php" method="get">
            <table>
                <tr>
                    <td>
                        <label for="nazwisko">
                            Nazwisko :
                        </label>
                    </td>
                    <td>
                        <input class="input_box" type="text" name="nazwisko" id="nazwisko" placeholder="Jan"/>
                    </td>
                </tr>
                <tr>
                        <td>
                            <label for="imie">
                                Imię:
                            </label>
                        </td>
                        <td>
                            <input class="input_box" type="text" name="imie" id="imie" placeholder="Nowak"/>
                        </td>
                </tr>
                <tr>
                    <td>
                        <label for="wiek">
                            Wiek:
                        </label>
                    </td>
                    <td>
                        <input class="input_box" name="wiek" id="wiek" placeholder="20" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kraj">
                            Państwo:
                        </label>
                    </td>
                    <td>
                        <select class="input_box" name="kraj" id="kraj">
                            <option value="" selected>Wybierz</option>
                            <option value="Polska">Polska</option>
                            <option value="Rosja">Rosja</option>
                            <option value="USA">Stany Zjednoczone</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">
                            Adres e-mail:
                        </label>
                    </td>
                    <td>
                        <input class="input_box" type="text" name="email" placeholder="name@email.com" id="email" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4> Zamawiam tutorial z języka:</h4>
                        <?php
                        foreach ($jezyki as $jezyk)
                        {
                            echo "<input class=\"input_box\" type=\"checkbox\" name=\"jezyki[]\" value=\"$jezyk\"/> $jezyk";
                        } 
                        ?>
                    </td>
                </tr>
                <tr>   
                    <td colspan="2">
                        <h4> Sposób zapłaty: </h4>
                        <div class="line">
                            <input class="input_box" type="radio" name="platnosc" value="eurocard" /> eurocard <br />
                            <input class="input_box" type="radio" name="platnosc" value="visa" checked/> visa <br />
                            <input class="input_box" type="radio" name="platnosc" value="przelew" /> przelew bankowy <br />
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input class="button" name="button" type="reset" id="clear" value="Wyczyść"/>
                    <input class="button" name="button" type="submit" id="save" value="Zapisz"/>
                    <input class="button" name="button" type="submit" id="show" value="Pokaż"/>
                    <input class="button" name="button" type="submit" id="php" value="PHP"/>
                    <input class="button" name="button" type="submit" id="cpp" value="CPP"/>
                    <input class="button" name="button" type="submit" id="java" value="Java"/>     
                    <input class="button" name="button" type="submit" id="stats" value="Statystyki"/>    
                    </td>
                </tr>
            </table>
        </form>

        <?php

            $input = filter_input(INPUT_GET, "button");
            if($input)
            {
                parse($input);
            }
          
        ?>

    </main>
</body>

</html>