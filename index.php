<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<title>Discuss</title>
</head>

<body>
<div class="container" style="width:300px">
    <center><h1 class="page-header">微软之行<small>Share</small></h1></center>
    <form role="form" action="index.php" method="post">
      <div class="form-group">
        <label for="name">课官，请问怎么称呼</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="大大姓名或小小昵称">
      </div>
      <div class="form-group">
        <label for="content">想说点啥</label>
        <textarea class="form-control" rows="3" id="content" name="content">
        </textarea>
      </div>
        <input type="text" style="display:none" class="form-control" id="nowtime" name="time" value="<?php echo date("Y-m-d-H:i")?>" placeholder="<?php echo date("Y-m-d-H:i") ?>">
      <center><button type="submit" class="btn btn-success btn-lg">哈哈，点我点我</button></center>
    </form>

<hr />
<hr />

<?php 
	include "mysql_connect.php";
if (isset($_POST["name"]))
	{
		$_name = $_POST["name"];
		$_content = $_POST["content"];
		$_time = $_POST["time"];
		mysql_query("INSERT INTO topic(name, content, time) VALUES('$_name', '$_content', '$_time')");
	}
	$result = mysql_query("SELECT * FROM topic order by id desc limit 100");
	while($row = mysql_fetch_array($result))
	{
		$myname = $row["name"];
		$mycontent = $row["content"];
		$mytime = $row["time"];
		echo 
		'<div class="list-group">
                <a href="#" class="list-group-item active">
                    <span class="glyphicon glyphicon-user"></span> 我是 '.$myname.'&nbsp;&nbsp;&nbsp;'.$mytime.
                '</a>'.$mycontent.'   
		</div>';
        echo "<hr />";
	}
?>
	<div class="footer">
        <center>&copy;CopyRight 计小科 2013-2014</center>
        <center>@贺凤霞 @贾泽群 @李赛 @吴越文</center>
        <center>@熊艺纯 @禤达川 @张念 (姓氏)</center>
        
    </div>

</div>




<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>