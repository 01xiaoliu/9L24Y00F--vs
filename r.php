<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style type="text/css">
    body{
        text-align:center;
        font-size:25px;
    }
    span{
        with:30px;
        height:10px;
        display:index-block;
    }
</style>
<?php
for($i=1;$i<=9;$i++){
    $n=$i>5?(10-$i):$i;
    $k=2*$n-1;
    for($j=1;$j<=$k;$j++){
        echo'<span>*</span>';
    }
    echo'<br>';
}
?>

</body>
</html>