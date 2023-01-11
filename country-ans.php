<?php require_once 'array.php' ?>

<?php
// $country = $_GET["<?=$key"];
// $answer = $_GET["answer"];
// $total = 0;

// if($country == $answer)  {
//     echo "あなたの点数は、" . "total*1.66" . "点です。";
// }


//  var_dump($_GET["カナダ"]);

//2つの配列を比較して、違いがあればそれだけ返してくる
 $hazures = array_diff( $_GET , $answers);
 $total = count($hazures)*16.66;
 echo "<p>あなたの点数はざっと", $total, "です。</p>";

 $total = 0;
 foreach( $answers as $k => $city ) {

    if( isset($_GET[$k]) && $_GET[$k] == $city ) {
        $total += 16.66 ;
    }
 }

 echo "あなたの点数は", ceil($total), " です。";