<?php include 'header.php';

//チェックなしで送られた場合に条件分岐が必要
if( isset($_GET['pet'])) {
    //↓これだと最後にも「,」が付くので最後の「,」だけ取りたい
    // foreach($_GET['pet'] as $pet)
    //     echo $pet . ',';
    // }

    // $str = implode("," , $_GET['set'] );
    // $str = rtrim($str, ",");
    // echo $str . "が選ばれました";
    
    //↓最後の「,」無しで表示できる
    echo implode(",", $_GET['pet']);
        echo 'が選ばれました';

    
// var_dump($_GET['pet']);
}else{
    echo "選ばれませんでした";
} 



//チェックなしの場合に"選ばれませんでした"などを出るようにする