<?php
function decFloor($num, $prec, $sep)


{
print_r("The original number is ".$num."<br>");
$divNum=explode($sep, $num);

$divNum[1]=substr_replace($divNum[1],$sep,$prec,0);

$divNum[1]=floor($divNum[1]);

$ceil_number= array($divNum[0],$divNum[1]);
return implode($sep,$ceil_number);


}

print_r("The florred Number is ".decFloor(2.99999, 2, ".")."<br>");
print_r("The florred Number is ".decFloor(199.99999, 4, ".")."<br>");
?>

