<!doctype html>
<html>
<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ทดสอบการใช้ google font for web devbanban.com</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

	<style type="text/css">
		body{
			font-family: 'Mitr', sans-serif;
		}
	</style>
</head>
<body>
login สำเร็จ <br>
<?php
date_default_timezone_set("asia/bangkok");
function DateThai($strDate)
{
$strYear = date("Y",strtotime($strDate))+543;
$strMonth= date("n",strtotime($strDate));
$strDay= date("j",strtotime($strDate));
$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
$strMonthThai=$strMonthCut[$strMonth];
return "$strDay $strMonthThai $strYear";
}

$strDate =date("d-m-Y");
echo "วันที่ ". DateThai($strDate);
$date = date(" h:i:s");
echo " เวลา ".$date." น. "; 


?>
    <p><strong>
    <a href="logout.php">Log out</a></strong></p>

</body>

</html>

