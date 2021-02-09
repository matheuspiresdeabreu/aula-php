<html>
    <head>
        <title>PHP - Aula </title>

    </head>

    <body>
        <h1>PHP - Aula 4</h1>

      <?php

        // E -> P -> S

        function soma($n1, $n2)
        {
            $soma = $n1 + $n2;
            return $soma;
        }

        echo soma(2, 5) . "<br>";
        echo soma(6, 12);
