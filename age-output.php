<?php include 'header.php'; 

$min_age = 12;
$max_age = 100;
$a = $_POST['age'];
// if ($a <= $min_age) {
// 	echo "乗れない";
// }elseif ($a >= $max_age) {
//     echo "乗れない";
// } else {
// 	echo "乗れる";
// }

//"乗れない"条件をまとめて書く書き方
//結果は上に書いたのと一緒になる
if ( $a >= $min_age && $a < $max_age ) {
    echo "乗れる";
} else {
    echo "乗れない";
}
 
// var_dump( $_POST['age'] );  

// echo $_POST['age'];