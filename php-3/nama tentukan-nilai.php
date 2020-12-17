<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function tentukan_nilai($number)
{
    if($number <= 100 && $number >= 85){
        return "Sangat Baik <br>";
    }elseif ($number < 85 && $number >= 70) {
        return "Baik <br>";
    }elseif ($number < 70 && $number >= 60) {
        return "Cukup <br>";
    }else{
        return "Kurang <br>";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>
</body>
</html>