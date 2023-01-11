<?php require_once 'array.php' ?>

<form action = "country-ans.php" >

<?php

//練習　都市を１５個繰り返してラジオボタンで出す
foreach($country as $key => $citis) { //←ここで３つの都市を取り出している
    echo "<h4>$key</h4>";
    shuffle($citis);                  //取り出した３つの都市をシャッフル　

    foreach($citis as $city) {

?>



<label>
    <input type = "radio" name = "<?=$key?>" required value = "<?$city?>" >
    <?=$city?>
</label>

<!-- <input type="hidden" name="answer" value=" echo $answer " -->

<?php } 
}?>

<style>
    label {display: block;}
    h4 {margin-bottom: .5rem;}
    [type="radio"] {zoom: 125%;}
</style>

<input type="submit" value="送信">
</form>
