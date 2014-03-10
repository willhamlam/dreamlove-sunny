<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sunny报名表</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="header pd20">
		<img src="img/sunny-bg.jpg" alt="">
	</div>
	<div class="main">
		
	</div>
	<div class="footer mt30">

		<div class="wrapper tc">
			<form action="process.php" method="post">
				<input type="text" placeholder="姓名" name="name">
				<input type="text" placeholder="联系电话" name="phone" pattern="[0-9]*">
				<input type="text" placeholder="学号" name="number">
				<input type="text" placeholder="是否参加百公里" name="confirm">
				<input type="submit" name="提交" value="加入 SKSUNNY">
			</form>
			<a href="more.php" class="mb20 know-more">点击了解SKSUNNY</a>
		</div>	
	</div>
	<script src="js/zepto.js"></script>
	<script>
		(function($){
			$('input[type="submit"]').click(function(){
				
				var inputArray = $('input[type="text"]');
				
				// inputArray.each(function(){

				// 	var inputItem = $(this);
				// 	// console.log(inputItem);
				// 	if(!inputItem.val()){
				// 		// event.stopPropagation();
				// 		alert('请把信息填写完整');
				// 		// e.preventDefault();
				// 		return false;
				// 	}
				// });
				
				for(var i =0; i < inputArray.length; i++){
					var inputItem = inputArray.eq(i).val();
					if(!inputItem){
						alert("请把信息填写完整");
						return false;
					}
				}
				
			});

		})(Zepto);
	</script>
</body>
</html>