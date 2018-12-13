<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	date_default_timezone_set('Asia/Jakarta');
	$tanggal= mktime(date("m"),date("d"),date("Y"));
	$tglsekarang = date("d-F-y", $tanggal);
	echo $tglsekarang; date("d F Y",strtotime($tglsekarang));
?>

</body>
</html>