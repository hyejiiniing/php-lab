<!-- PHP에서 변수는 $ 기호로 시작하며, 자료형을 따로 지정하지 않아도 된다. -->
<?php
$name = "혜진";
$age = 29;
$height = 167.8;
$isDev = true;

echo "이름: $name<br>";
echo "나이: $age<br>";
echo "키: $height<br>";
echo "개발자 여부: " . ($isDev ? "예" : "아니오");
?>

<!-- 변수 이름 규칙
    1.$ 로 시작해야 함
    2. 영어, 숫자, _(언더스코어) 사용 가능
    3. 대소문자 구분 ($Name ≠ $name)
    4. 예약어 (if, while, for 등)는 변수명으로 사용 불가 -->

<!-- 문자열과 변수 함께 출력하기
    PHP에서는 쌍따옴표 " " 안의 변수는 자동으로 해석된다.
    반면, 홑따옴표 ' ' 안에서는 문자열 그대로 출력된다. -->

<?php
$name = "혜진";

echo "안녕하세요, $name 님!";
echo "<br>";
echo '안녕하세요, $name 님!';
?>

<!-- var_dump()는 변수의 타입(type) 과 값(value) 을 함께 출력한다.
    디버깅할 때 유용하다. -->

<?php
$price = 1200;
var_dump($price);
?>

<!-- 동적 타입 변화
    PHP는 동적 타입 언어로, 같은 변수라도 값이 바뀌면 타입도 자동으로 바뀐다. -->

<?php
$value = "100";  // 문자열
var_dump($value);

$value = 100;    // 정수형으로 변경
var_dump($value);
?>



