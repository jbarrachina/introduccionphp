

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            if (isset($_POST['euros']))
            {  
                $monedero=[500,200,100,50,20,10,5,2,1,0.5,0.2,0.1];
                $euros = $_POST['euros'];
                $i=0;
                while ($euros>0){
                    $cantidad = intdiv($euros, $monedero[$i]);
                    $euros = $euros%$monedero[$i];
                    echo "$cantidad billetes/monedas de ",$monedero[$i],"<br>";
                    $i++;
                }
            }
            ?>
            <form action="separaMonedas.php" method="post">
                Introduce la cantidad de euros: <input type="text" name="euros">        
                <input type="submit">
            </form>
        </div>
    </body>
</html>

