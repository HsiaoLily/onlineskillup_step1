<?php
//"one", "two", "three"を要素とする配列を作成
$a1 = array("one", "two", "three");
//配列$a1の末尾に"four"という要素を追加
$a1[] = "four";
////配列$a1の0番目の要素を変更
$a1[0] = "one?";
//表示
print_r($a1[1]);
?>