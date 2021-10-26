<?php $jezyki = ["C", "CPP", "Java", "C#", "HTML", "CSS", "XML", "PHP", "JavaScript"]; ?>
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
            <h3>
                Przykładowy formularz HTML:
            </h3>
            <form action="odbierz4.php" method="get">
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
                            <input class="button" type="submit" value="Wyślij" />
                            <input class="button" type="reset" value="Anuluj" />
                        </td>
                    </tr>
                </table>
            </form>
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