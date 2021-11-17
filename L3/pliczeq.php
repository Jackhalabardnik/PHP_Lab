<?php include_once "funkcje.php"; ?>
<?php $jezyki = ["C", "CPP", "Java", "C#", "HTML", "CSS", "XML", "PHP", "JS"]; ?>
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
        <main>
            <form action="pliczeq.php" method="get">
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
                            <input class="input_box" type="email" name="email" placeholder="name@email.com" id="email" />
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
                            <input class="button" type="reset" value="Wyczyść" />
                            <input class="button" type="submit" value="Zapisz" name="submit" />
                            <input class="button" type="submit" value="Pokaz" name="submit" />
                            <input class="button" type="submit" value="PHP" name="submit" />
                            <input class="button" type="submit" value="CPP" name="submit" />
                            <input class="button" type="submit" value="Java" name="submit" />
                        </td>
                    </tr>
                </table>
            </form>
            
            <?php
            
            if(isset($_REQUEST['submit']))
            {
                parse();
            }
            ?>

            </main>
        <footer> 
            <p>
                &copy;JW
            </p>
        </footer>
</body>

</html>