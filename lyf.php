<?php
     $xm = $_POST['xm'];
     $nl = $_POST['nl'];
     $xb = $_POST['xb'];
     $bj = $_POST['bj'];
     $kn=$_POST['kn'];
     $kn_string=implode(',',$kn);
     $sh = $_POST['sh'];

    echo '姓名：'.$xm,'<br>';
    echo '年龄：'.$nl,'<br>';
    if($xb==1){
         echo '性别：男','<br>';
     }else {
     echo '性别：女','<br>';
     }

    echo '班级：'.$bj,'<br>';
    echo '已熟悉的编程语言：'.$kn_string,'<br>';
    echo '计划实习收获：'.$sh,'<br>';
?>