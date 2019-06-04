<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập hiển thị số lượng tùy ý số nguyên tố đầu tiên</title>
</head>
<style>
    input[type=number]{
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }
    #submit{
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<form method="post">
    <div>
        <h2>Display arbitrary number of first prime numbers</h2>
        <input type="number" name="numbers" size="30">
        <input type="submit" id="submit" value="search">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number = $_POST["numbers"];
    function findPrimeNumbers($number)
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i < sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

    for ($i = 0; $i < $number; $i++) {
        if (findPrimeNumbers($i)) {
            echo("$i :Là số nguyên tố" . "<br>");
        }
    }
}
?>
</body>
</html>