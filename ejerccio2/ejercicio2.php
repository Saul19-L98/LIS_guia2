<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 😁</title>
    <link rel="stylesheet" href="./style2.css">
</head>
<body>
<section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Informacion de formulario 💰</caption>
                    <thread>
                        <tr class="thead">
                            <th scope="col">Dolares 💵</th>
                            <th scope="col">Euros 💶</th>
                        </tr>
                    </thread>
                    <tbody>
                        <?php
                            if(isset ($_POST['submit']) && $_POST['submit'] == "Enviar"):

                                //Accediendo a los datos del formulario usando la funcion extract
                                extract($_POST);

                                $usd = !empty($usd) ? $usd :  "<a href=\"datos.html\">No ingreso el cliente.</a>";
                                echo "\t<tr class=\"odd\">\n";
                                echo "\t\t<td> \n$" . $usd . "\n</td>\n";

                                
                                if(isset($usd) && floatval($usd) > 0 ):
                                    echo "\t<td>\n€" . number_format($usd * 0.89, 2, '.', ',') . "\n</td>\n";
                                else:
                                    echo "\t<td>\nNada que convertir\n</td>\n";
                                endif;
                                    echo "\t</tr>\n";
                            else:
                                echo "\t<tr class=\"odd\">\n";
                                echo "\t\t<td>No se han ingresado desde el formulario.</td>";
                                echo "\t</tr>\n";
                            endif;
                        ?>
                    </body>
                </table>
                <div class="button">
                    <a href="datos.html" class="button-link">Ingresar nuevos datos</a>
                </div>
            </div>
        </article>
    </section>
</body>
</html>