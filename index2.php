<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>
         <style>
            *{
                box-sizing: border-box;
            }
         </style>
    </head>
    <body>

      
        <form action="" method="get">

            <select name="ertekek[]"  size="3" multiple>
                <option value="val1">val1</option>
                <option value="val2">val2</option>
                <option value="val3">val3</option>
                <option value="val4">val4</option>

            </select>
            <button>Küldés</button>

        </form>
 
        <?php  
        print_r( $_GET['ertekek'] );
        ?>

 

    </body>
</html>