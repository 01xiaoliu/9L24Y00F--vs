<?php
$goods =array(
  array('name'=>'主板','price'=>'379','producing'=>'广东','num'=>3),
  array('name'=>'显卡','price'=>'799','producing'=>'上海','num'=>2),
  array('name'=>'硬盘','price'=>'589','producing'=>'北京','num'=>5)
);
$total =0;
$str ="<table >";
$str .="<tr><td>商品名称</td><td>价格(元)</td><td>产地</td>";
$str .="<td>数量(件)</td><td>总价(元)</td></tr>";
foreach ($goods as $values) {
  $str .='<tr>';
  foreach($values as $v){
  $str .='<td>'.$v.'</td>';
}
$sum =$values['price']*$values['num'];
$str .='<td>'.$sum.'</td>';
$str .='</tr>';
$total +=$sum;
}
$str .="<tr><td>小计:".$total."元</td></tr></table>";
echo $str;
 ?>