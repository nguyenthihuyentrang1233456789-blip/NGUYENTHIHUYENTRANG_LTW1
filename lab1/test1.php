<?php
echo "Ho va ten: NGUYEN THI HUYEN TRANG <br>";
echo "Ngay sinh: 09/01/2007 <br>";
echo "<MSSV:2125110076> <br>";

$HOTEN ="NGUYEN THI HUYEN TRANG";
$MSSV ="2125110076";
$SDT="0325668748";
$NGAYSINH="09/01/2007";
echo "Họ tên: " . $HOTEN . "<br>";
echo "MSSV: " . $MSSV . "<br>";
echo "Số điện thoại: " . $SDT . "<br>";
echo "Ngày sinh: " . $NGAYSINH . "<br>";

define("HOST", "localhost");
define("DATABASE", "ten_csdl");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";
echo "<hr>";

echo "Nháy kép: Xin chào $hoTen <br>"; 
echo 'Nháy đơn: Xin chào $hoTen <br>';
