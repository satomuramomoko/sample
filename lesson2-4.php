<?php include 'header.php'; ?>

<?php
 $a = 2;
 if ($a === 1) {
    echo "aは1です。";
 }

 //var_dumpは値だけじゃなく式の結果も見れる
 var_dump('a' == 1);   //false
 var_dump(true == 1);  //true　値としては等しい
 var_dump(true === 1); //false 型が異なる

 var_dump(2 >= 2); //true 2以上だから
 var_dump(2 > 2);  //false 2より大きくないから

 var_dump( 2 <=> 2 ); //
 var_dump( 2 <=> 1 ); //
 var_dump( 1 <=> 2 ); //

 //父兄 or 11歳 or 120
 //父兄同伴=1, 同伴じゃない=0
 // 0+0+0 乗れない