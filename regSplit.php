<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>

    <form action="" method="POST">
    <input type="email" name ="value" size = 10 placeholder="enter email">
    <input type="submit" value="check">
    </form>
</div>
    <?php 
    $var = isset($_POST["value"] ) ? $_POST["value"]: " ";
    $input = $var;
    // echo $input;

    function splitSentences($input) {
        $re = "/@/";
        $sentences = preg_split($re, $input);
        // print_r($sentences[0]);
        // echo $sentences[1];
        return $sentences;
    }
    
    $sentences = splitSentences($input);
    
    print_r($sentences);
    // echo "Hi there";

    ?>
</body>
</html>