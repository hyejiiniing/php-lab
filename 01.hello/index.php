<!-- PHP란? 
    PHP는 서버에서 실행되는 스크립트 언어(Server-side scripting language) 로,
    HTML 파일 안에서 PHP 코드를 작성하면 서버가 PHP를 해석하고
    결과만 브라우저로 전달한다. -->
<?php
$txt = "PHP";
echo "Hello, $txt !"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <h1><?php echo "Hello!"; ?></h1>
    <p><?php echo "Study PHP"; ?></p>
</body>
</html>