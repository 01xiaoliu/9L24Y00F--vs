<?php
   $var1 = 20;
   $var2 = $var1;
   echo $var2;
   echo '<hr/>';
   $var1 = 20;
   $var2 = &$var1;
   echo $var2;

   echo '<hr/>';
   define('con',20203397);
   var_dump(con);
   echo '<hr/>';
   define('CON','刘一帆');
   var_dump(CON); 

   echo '<hr/>';
   echo "服务器信息展示<br>";
   echo "当前PHP版本号:"; echo PHP_VERSION; echo "<br>";
   echo "操作系统类型:"; echo PHP_OS; echo "<br>";
   echo "整型的最大值:"; echo PHP_INT_MAX;

   echo '<hr/>';
   echo "十进制43用断除法转换二进制为00000000 00000000 00000000 00101011<br>";
   echo "二进制00000000 00000000 00000000 01001101用权系数展开再求和就得到十进制数为77";
   