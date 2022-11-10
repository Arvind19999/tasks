<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application of is_int</title>
</head>
<body>
    <div>
        <p>Enter the number</p>
    </div>
<div>

<!-- pattern="^-?([0-9]*\.?[0-9]+|[0-9]+\.?[0-9]*)$" -->
    <form action="" method="POST">
    <input type="number" name ="value" size = 10 placeholder="0" step="any">
    <input type="submit" value="check">
    </form>
</div>

<?php

$var = isset($_POST["value"] ) ? $_POST["value"]: 0;
$input = $var;

if(is_integer($input + 0) == 1){
    echo "The Number you entered is " .$input ." which is integer";

}
else{
    echo"The Number you entered is " .$input ." which is not  integer";
}
?>
</body>
</html>