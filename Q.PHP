<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
const DISCONT=0.8;
$fruit1 = '香蕉';
$fruit2 = '苹果';
$fruit3 = '橘子';

$fruit1_num = 2;
$fruit2_num = 1;
$fruit3_num = 3;

$fruit1_price = 7.99;
$fruit2_price = 6.89;
$fruit3_price = 3.99;

$fruit1_total = $fruit1_num * $fruit1_price;
$fruit2_total = $fruit2_num * $fruit2_price;
$fruit3_total = $fruit3_num * $fruit3_price;

$total=($fruit1_total + $fruit2_total + $fruit3_total) * DISCONT;
?>

<table border="1" cellpadding="1" cellspacing="0">
    <tr>
        <td>商品价格</td>
        <td>购买数量(斤)</td>
        <td>商品数量(元/斤)</td>
    </tr>
    <tr>
        <td><?php echo $fruit1; ?></td>
        <td><?php echo $fruit1_num; ?></td>
        <td><?php echo $fruit1_price; ?></td>
    </tr>
    <tr>
    <td><?php echo $fruit2; ?></td>
    <td><?php echo $fruit2_num; ?></td>
    <td><?php echo $fruit2_price; ?></td>
    </tr>
    <tr>
    <td><?php echo $fruit3; ?></td>
    <td><?php echo $fruit3_num; ?></td>
    <td><?php echo $fruit3_price; ?></td>
    </tr>
    <tr>
        <td colspan="3">
            商品折扣：<span><?php echo DISCONT; ?></span>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            打折后购买总价格：<?php echo $total; ?> 元
        </td>
    </tr>
</table>
</body>
</html>