<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20203397刘一帆</title>
</head>
<body>
    <h2>学生实习计划表</h2>
    <form method="post" action="lyf.php">
        <label class="log-lab">姓名：</label>
        <input name="xm" type="text" value="" />
        <br/>
        <label class="log-lab">年龄：</label> <input name="nl" type="" value="" />
        <br/>
        <label class="log-lab">性别：</label> <input name="xb" type="radio" value="1" />男
        <input name="xb" type="radio" value="2" />女
        <br/> 班级：
        </label> <input name="bj" type="radio" value="计算机1班" />计算机1班
        <input name="bj" type="radio" value="计算机2班" />计算机2班
        </label>
        <input name="bj" type="radio" value="计算机3班" />计算机3班
        <input name="bj" type="radio" value="计算机4班" />计算机4班
        <input name="bj" type="radio" value="计算机5班" />计算机5班 <br/> 已熟悉的编程语言：（可多选）
        <input type="checkbox" name="kn[]" value="SQL" />SQL
        <input type="checkbox" name="kn[]" value="java" />java
        <input type="checkbox" name="kn[]" value="PHP" />PHP
        <input type="checkbox" name="kn[]" value="HTML" />HTML
        <input type="checkbox" name="kn[]" value="python" />python
        <br/>计划实习收获：
        <input type="text" name="sh" style="width:400px;height:100px" />
        <br/>
        <input type="reset" name="" /> <input type="submit" value="登录" />
    </form>
</body>
<html>
