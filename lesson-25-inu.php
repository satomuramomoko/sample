<?php include 'header.php';

$pets = [
  "イヌ",
  "ネコ",
  "ウサギ",
  "ハムスター",
  "熱帯魚",
  "トラ",
  "リス"
];
// $count = count($pet);
// var_dump($count);
?>
<!-- form属性の復習
「lesson-25-inuout.php」に値が送れるようにする
getメソッドで送信する -->

<form action= 'lesson-25-inuout.php'>
  <p>ペットにしたい動物は？（複数可）</p>
<?php
//  for ($i = 0; $i < 6; $i++) { 
    foreach($pets as $pet){?>
  <input name="pet[]" type="checkbox" value="<?=$pet?>"><?=$pet?><br>
<?php } ?>

  <!-- <input name="pet[]" type="checkbox" value="イヌ"  >イヌ<br> -->
  <!-- <input name="pet[]" type="checkbox" value="ネコ"  >ネコ<br>
  <input name="pet[]" type="checkbox" value="ウサギ">ウサギ<br>
  <input name="pet[]" type="checkbox" value="ハムスター">ハムスター<br>
  <input name="pet[]" type="checkbox" value="熱帯魚">熱帯魚<br> -->
  <input type="submit" value="送信">
</form>


