<!Doctype html>
<html>
<head>
<meta charset = "utf-8">
<title>HASHING</title>
<?php
$input = "test123";
echo"<br>";
$hashedpwd = password_hash("test123", PASSWORD_DEFAULT);
//echo password_verify($input,$hashedpwd);

function generateKey(){

    $KeyLength = 8;
    $str = "1234567890abcdefghijklmnopqrstuvwxyz()/$";
    $randstr = str_shuffle($str);
    return $randstr;
}
echo generateKey();
?>
</head>
<body>
</body>
</html>