<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本の課題</title>
</head>
<body>
<h1>PHPの基本の課題</h1>
<p>このページの区切り一つ一つ解いていくこと
<?php
	$n = 10;
	print("<p>階層{$n}のピラミッドです<p>");

	for($i=0; $i< $n; $i++){
		for($j=0; $j <= $i; $j++ ){
			print("$j ");

		}
?>
<br />
<?php
	}
?>
<hr />
<h2>0から<?php print($n)?>までの数が偶数か奇数か答える</h2>
<p>フォントは、偶数ならボールド（太字）、奇数はそのまま</p>
<?php
	for($i=0; $i< $n; $i++){
		if($i%2==0){
			print("{$i} は<b>偶数</b>です ");
		}else{
			print("{$i} は奇数です ");

		}
		print("<br />");
	}

?>
<?php
	$l =12;
	$c = 0;
	$sum = 0;
	?>
<hr />
<h2>1+2+3・・・+ n &gt; <?php print($l);?> となる最初のnを探す</h2>
<p>n = <?php
	while($sum < $l){
		$c++;
		$sum += $c;
	}

	print $c;
	?> のとき、合計は <?php print $sum;?> となる</p>
<hr />
<h2>function goukei($n)という関数（1+2+3・・・+ n）を作った上で 1+2+3・・・+ n &gt; <?php print($l);?> となる最初のnを探す</h2>
<p>n = <?php
$c=0;
while(goukei($c) < $l){
	$c++;
}
print $c;
?> のとき、合計は <?php print(goukei($c));?> となる</p>
<?php
function goukei($n){
	$sum = 0;
	for($i=0; $i <= $n; $i++){
		$sum += $i;

	}
	return $sum;

}
?>
</body>