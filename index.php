<?php
$date1 = date('Y-m-d H:i:s');	// 当前时间
$date2 = date('Y-m-d',strtotime("-1 day"));	// 昨天
$date3 = date('Y-m-d',strtotime("-1 month"));	// 一个月以前
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
My97DatePicker demo
</title>
<script language="javascript" type="text/javascript" src="js/WdatePicker.js"></script>
</head>
<body>
	<div>
		<span>自带插件样式Wdate</span>
		<input class="Wdate" type="text" onClick="WdatePicker()" />
	</div>
	<div>
		<span>$date1</span>
		<input type="text" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo $date1;?>" />
	</div>
	<div>
		<span>$date2</span>
		<input class="Wdate" type="text" onClick="WdatePicker()" value="<?php echo $date2;?>">
	</div>
	<div>
		<span>$date3</span>
		<input class="Wdate" type="text" onClick="WdatePicker()" value="<?php echo $date3;?>">
	</div>
</body>
</html>