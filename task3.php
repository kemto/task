<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function twice($i) {
    $i *= 2;
    return $i;
}

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a,$b) {
    return $a + $b;
}

/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function arr_multi($arr) {
    $result = 1;
    foreach ($arr as $ar) {
        $result *= $ar;
        
    }
    echo $result;
}

$arr = array(1,3,5,7,9);
arr_multi($arr);

/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。*/
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
 //どうしたらいいかわからない・・・・
       if ($max_number < $a) {
             $max_number = $a;
       }
    }

    return $max_number;
 }

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
$string = "<h1>function</h1><p>test</p>";
echo strip_tags($string,"<p>");

$fruits = array("apple","orange");
array_push($fruits,"pineapple","grape");
print_r($fruits);

$fruits2 = array("lemon","peach");
$fruits_merge = array_merge($fruits,$fruits2);
print_r($fruits_merge);

$timestamp = time();
echo $timestamp;

$timestamp = mktime(22,00,00,4,25,2019);
echo $timestamp;

echo date("y-m-d H:i:s");