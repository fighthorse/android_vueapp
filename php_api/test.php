<?php

header("Content-type: text/html; charset=utf-8");
echo "<pre>";
$pwd = "xinchao654321";
echo md5(md5($pwd)."hjkfyucvvjgeytfkf");

echo "\r\n<br/>";

echo "55乘法表\r\n";

for($i=1;$i<=5;$i++){
	for($j=1;$j<=5;$j++){
		printf("%4d * %d = %2d",$i,$j,$i*$j);
	}
	printf("\r\n");
}

echo "\r\n<br/>";
echo "三角星星号+倒三角星星号\r\n";
$hight = 10 ;
for($i=1;$i<=$hight;$i++){
	for($j=1;$j<=$hight-$i;$j++){
		printf(" ");
	}
	for($j=1;$j<=$i;$j++){
		printf("* ");
	}
	printf("\r\n");
}
for($i=1;$i<=$hight;$i++){
	for($j=1;$j<=$i;$j++){
		printf(" ");
	}
	for($j=1;$j<=$hight-$i;$j++){
		printf("* ");
	}
	printf("\r\n");
}

echo "\r\n<br/>";
echo "水仙花数指一个 n 位数（n≥3 ），它的每个位上的数字的 n 次幂之和等于它本身（例如：1^3 + 5^3+ 3^3 = 153）。\r\n";

$hight = 9 ;
$m=0;$n=0;
for($i=1;$i<=$hight;$i++){
	for($j=1;$j<=$hight;$j++){
		for($k=1;$k<=$hight;$k++){
			$m = $i*100+$j*10+$k;
			$n= pow($i,3) +pow($j,3)  + pow($k,3) ;
			if($m == $n){
				printf("%5d",$m);
			}
		}
	}
	printf("\r\n");
}


?>

