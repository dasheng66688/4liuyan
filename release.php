<?php
$ys = $_POST["ys"];
$t = date('Y-m-d H:i:s');
$wjj = "list/".$t;
mkdir($wjj);

$wj = "list/".$t."/message.txt";
$myfile = fopen($wj, "w");
fwrite($myfile,$ys); 
fclose($myfile); 

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />

<script language="javascript"> 
alert("发表成功！请返回刷新！"); 
</script>
<title>发表成功</title>
<?php
$url='index.php';
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>";
?>
</head>
<body>
</body>
</html>
