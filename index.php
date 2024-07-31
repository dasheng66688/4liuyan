<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大胜の留言板</title>
    <style>
        /* Additional inline styles for centering and other adjustments */
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        #bt {
            margin-bottom: 20px;
        }
        #x {
            font-size: 24px;
        }
        #an {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }
        #tw {
            background-color: #444;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        #tw h4 {
            margin: 0;
        }
    </style>
</head>
<body>

<div id="bt">
    <div id="x">
        <strong>大胜の留言板（由于时间仓促，页面简陋）</strong>
    </div>
</div>

<div>
    <form action="release.php" method="post">
        <input type="text" id="nr" name="ys" placeholder="输入留言内容">
        <input type="submit" id="an" value="一键发表留言">
        echo "<script>alert('不好的留言我会删除！')</script>";
    </form>
</div>

<?php
$path = "list/";
$dh = opendir($path);
while (($d = readdir($dh)) !== false) {
    if ($d == '.' || $d == '..') {
        continue;
    }
    
    $ljtz = "list/".$d."/message.txt";
    $n = file_get_contents($ljtz); 
    $u = basename($d);
?>

<div id="tw">
    <h4><?php echo $n; ?><br><?php echo $u; ?></h4>
</div>

<?php
}
closedir($dh);
?>

</body>
</html>
