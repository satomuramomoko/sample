<?php include 'header.php';?>

<main>メインコンテンツ</main>

<!-- Lesson2-6 -->
生まれ年
<select name="" id="">
<?php for( $i = 2022 ; $i >= 2000 ; $i--){ ?>
    <option value=""><?=$i?></option>
<?php } ?>
</select>
<!-- Lesson2-6 -->

<!-- htmlの中にphpを差し込む -->
お誕生日
<select name="" id="">
<?php for( $i = 1 ; $i < 32 ; $i++){ ?>
    <option value=""><?=$i?></option>
<?php } ?>
</select>


<pre>
    &lt;php?
     このなかにPHPコードを書く
    ?&gt;
    <?php include 'footer.php';?>
</pre>

<!-- phpからhtmlを書き出す -->
お誕生日
<select name="" id="">
<?php for ($i=1; $i<32 ; $i++) { 
    echo "<option value=''>$i</option>";
?>
<?php } ?>
</select>

<?php
 const I = 99; //定数は大文字で書くのが一般的
 echo I;
?>

<!-- 変数の練習 -->
<?php
$a = '101';
$b = "1003";
var_dump( $a + $b ); //1104
var_dump( $a - $b ); //-902

$a = 101;
$b = 1003;
var_dump( $a . $b ); //1011103
echo "$a - $b"; //101-1103
echo '$a - $b'; //$a-$b

//％は割り算の余りを計算して表示する
$a = 9;
$b = 3;
echo $a % $b .PHP_EOL;

$b = 4;
echo $a % $b ."\n";

//加算代入　減算代入
 echo $a + $b ."\n"; //13
 echo $a - $b ."\n"; //5

//インクリメント 1増やす
 echo ++$b ."\n"; //5　【前置】この行で1増える
 echo $b++ ."\n"; //5　【後置】ここではまだ増えない
 echo $b ."\n"; //6　前の行で後置しているので1増える

 //コード中に書く数字や文字は変数に代入してから使う
 echo 'こんにちは';  //　×悪い例

 $a = 'こんにちは';  //　〇良い例
 echo $a; 

?>




<?php
 $text = 'こんにちは';
 $text .= '今日は';
 $text = $text . '今日は';
 echo $text;
 ?>

