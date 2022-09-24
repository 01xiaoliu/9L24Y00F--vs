<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<body>
    <p>学生实习计划表</p>
    <form method="post" action="./aihao.php">
    <label class="log-lab">姓名：</label>
    <input name="username" type="text" value="" />
    <label class="log-lab">年龄：</label> <input name="password" type="" value="" /><br/>
        <label class="log-lab">性别：</label> <input name="gender" type="radio" value="1" />男
        <input name="gender" type="radio" value="woman" />女
        <br/>
        班级： </label> <input name="g" type="radio" value="1" />计算机一班
        <input name="g" type="radio" value="woman" />计算机二班
        </label> <input name="g" type="radio" value="1" />计算机三班
        <input name="g" type="radio" value="woman" />计算机四班
        <input name="g" type="radio" value="woman" />计算机五班
        <br/>
        已熟悉的编程语言：
        <input type="checkbox" name="hobby[]" value="java" />java
        <input type="checkbox" name="hobby[]" value="python" />python
        <input type="checkbox" name="hobby[]" value="SQL" />SQL
        <br/>
        <input type="submit" value="登录" />
    </form>
</body>

<ml>
