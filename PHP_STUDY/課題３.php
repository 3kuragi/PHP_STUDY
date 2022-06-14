<?php
$c = double(5);
echo $c;
// １．引数として受け取った数値を2倍にして返却するdouble関数
function double($x){
    return $x *2 ;
}
// 2. 引数として受け取った値が数値であればtrueをそれ以外ならfalseを返却するisNumber関数。数値とはinteger型またはdouble型を指す 

$val = isNumber(50);
echo $val;

function isNumber($val){
    return is_numeric($val);
    
}
// 3. 数値の入った配列を引数として受け取り、配列内の要素をすべて二倍にして配列として返却するdoubleArr関数。ただし引数が配列でなかった場合はfalseを返却すること
$result = doubleArr(1,2,3,);
echo $result;
function doubleArr($result){
 if (gettype($result)=="array"){
     
 }else {
     return false
 }
}
