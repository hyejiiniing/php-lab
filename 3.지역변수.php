<?php
// 전역변수
// 로컬변수 (지역변수)

$x = 5;

function Test() {
    global $x;
    echo "변수 x의 출력값 $x";
    echo "<br>";
}

Test();

echo "변수 x의 출력값 $x";
?>