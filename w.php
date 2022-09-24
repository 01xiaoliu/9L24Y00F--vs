<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>九九乘法表</h2>
<table border="1">
    <?php
    for($i=1; $i<10; $i++){
        echo'<tr>';
        for($j = 1;$j<=$i;$j++){
            echo'<td>'.$j.'x'.$i.'='.$j*$i.'</td>';
        }
        echo'</tr>';
    }
    ?>

</table>
</body>
</html>