<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 😁</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
        <caption>Informacion de formulario</caption>
            <thread>
                <tr class="thead">
                    <th scope="col">Campo</th>
                    <th scope="col">Valor</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $nombre = "Saul Lainez";
                    $lugarN = "Antiguo Cusclatan";
                    $departamento = "San Salvador";
                    $edad = 23;
                    $carnet = "lm170147";
                    
                    echo "\t\t<td>\nNombre\n</td>\n";
                    echo "\t\t<td>\n" . $nombre . "\n</td>\n";
                    echo "\t</tr>\n";

                    echo "\t\t<td>\nNacimiento\n</td>\n";
                    echo "\t\t<td>\n" . $lugarN . "\n</td>\n";
                    echo "\t</tr>\n";

                    echo "\t\t<td>\nDepartamento\n</td>\n";
                    echo "\t\t<td>\n" . $departamento . "\n</td>\n";
                    echo "\t</tr>\n";

                    echo "\t\t<td>\nEdad\n</td>\n";
                    echo "\t\t<td>\n" . $edad . "\n</td>\n";
                    echo "\t</tr>\n";

                    echo "\t\t<td>\nCarnet\n</td>\n";
                    echo "\t\t<td>\n" . $carnet . "\n</td>\n";
                    echo "\t</tr>\n";
                ?>
            </tbody>
    </table>
</body>
</html>