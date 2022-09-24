<?php
echo "<h2>闰年的判断</h2>";
$year = 0;
if(isset($_GET['ok']))
{
    $year = (int)$_GET['years'];
}
if (($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0))
{
    echo "{$year}年是闰年";
}
else
{
    echo "{$year}年不是闰年";
}
echo "<hr>";
echo "<form method='get' action=''>";
echo "<input type='text' name='years' id='years'><input type='submit' name='ok' value='提交' style='width: 200px;'>";
echo "</form>";