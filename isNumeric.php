    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Application of is_numeric</title>
    </head>
    <body>
        <div>
            <p>Enter the either Word or Number</p>
        </div>
    <div>

    <!-- pattern="^-?([0-9]*\.?[0-9]+|[0-9]+\.?[0-9]*)$" -->
        <form action="" method="POST">
        <input type="text" name ="value" size = 10 placeholder="0">
        <input type="submit" value="check">
        </form>
    </div>

    <?php

    $var = isset($_POST["value"] ) ? $_POST["value"]: 0;
    $input = $var;

    if(is_numeric($input) == 1){
        echo "You entered " .$input ." which is Number";

    }
    elseif(is_numeric($input) != 1){
        echo "You entered " .$input ." which is String";

    }
    ?>
    </body>
    </html>