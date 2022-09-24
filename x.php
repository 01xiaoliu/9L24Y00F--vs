<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $hobby=$_POST['hobby'];
    $hobby_string=implode(',',$hobby);


    echo '姓名：'.$username,'<br>';
    echo '年龄：'.$password,'<br>';
    echo '已熟悉的编程语言：'.$hobby_string,'<br>';
    if($gender==1){
        echo '性别：男','<br>';
    }else {
        echo '性别：女','<br>';
    }
