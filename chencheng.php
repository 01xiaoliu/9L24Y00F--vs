<?php
     $xingming = $_POST['xingming'];
     $nianling = $_POST['nianling'];
     $xingbie = $_POST['xingbie'];
     $banji = $_POST['banji'];
     $ke=$_POST['ke'];
     $ke_string=implode(',',$ke);
     $shouhuo = $_POST['shouhuo'];


    echo '姓名：'.$xingming,'<br>';
    echo '年龄：'.$nianling,'<br>';
    if($xingbie==1){
         echo '性别：男','<br>';
     }else {
     echo '性别：女','<br>';
     }

    echo '班级：'.$banji,'<br>';
    echo '已熟悉的编程语言：'.$ke_string,'<br>';
    echo '计划实习收获：'.$shouhuo,'<br>';
    
?>