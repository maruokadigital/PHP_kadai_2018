<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHPの基本の課題</title>
</head>
<body>
<h1>PHPの基本の課題</h1>
<p>このページの区切り一つ一つ解いていくこと

<h2>階層ピラミッド</h2>
<?php
	$n = 10;
	print("<p>階層{$n}のピラミッドです。<br />for文を2つ使い、入れ子にして実施します<p>");

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
<p>フォントは、偶数ならボールド（太字）、奇数はそのまま。<br />if文を使い、分岐します</p>
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
	$l =200;
	$c = 0;
	$sum = 0;
	?>
<hr />
<h2>1+2+3・・・+ n &gt; <?php print($l);?> となる最初のnを探す</h2>
<p>while文を使い、条件に合うまで繰り返します</p>
<?php
	while($sum < $l){
		$c++;
		$sum += $c;
	}

	print("<p>n = {$c} のとき、合計は  {$sum}となる</p>");?>
<hr />
<h2>関数を作った上で 1+2+3・・・+ n &gt; <?php print($l);?> となる最初のnを探す</h2>
<p>function goukei($n) を定義してください。その関数で　1+2+3・・・n　を実施します</p>
<?php
$c=0;
while(goukei($c) < $l){
	$c++;
}
$sum=goukei($c);
 print("<p>n = {$c} のとき、合計は  {$sum}となる</p>");
 ?>
<?php
function goukei($n){
	$sum = 0;
	for($i=0; $i <= $n; $i++){
		$sum += $i;

	}
	return $sum;

}
?>
<hr />
<h2>上級者向け　1+2+3・・・+ n  &lt; <?php print($l);?> となる最大のnを探し、そこまでの過程を表示する</h2>
<p><?php
$c=0;
while(goukei($c) < $l){
	$c++;
}
$c--;
for ($i=$c; $i>0; $i--){
	?>n = <?php
	print $i;
	?> のとき、合計は <?php print(goukei($i));?> となる<br />

<?php } ?>
</p>
</body>