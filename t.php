<?php
$path = 'C:\images\apple.jpg';
$ext_pos = strrpos($path, '.') + 1;
$ext = substr($path,$ext_pos);


function getFileExt($path)
{
    $ext = substr($path,strrpos($path,'.') + 1);
    return $ext;
}

$path = 'C:\images\apple.jpg';
$ext = getFileExt($path);
?>
<title>获取文件扩展名</title>
<h1>获取文件扩展名</h1>
<p>文件路径:<?php echo $path; ?></p >
<p>文件扩展名:<?php echo $ext; ?></p >