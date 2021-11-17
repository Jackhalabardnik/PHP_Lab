<?php 
$jezyki = ["C", "CPP", "Java", "C#", "HTML", "CSS", "XML", "PHP", "JavaScript"]; 
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
            Wybierz technologie, które znasz:
        </h3>
        <form action="ankieta_odbierz.php" method="get">
            <table>
                <tr>
                    <td colspan="2">
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
                    <input class="button" name="button" type="submit" id="save" value="Wyślij"/>
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