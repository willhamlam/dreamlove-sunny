<?php 
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$number = $_POST['number'];
	$confirm = $_POST['confirm'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
 ?>
 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>dream.love</title>
 	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
 	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
 </head>
 <body>
 		 <div class="header pd20">
				<img src="img/sunny-bg.jpg" alt="">
		 </div>
 		 <div class="main success">
 		 	
 		 		
 		 		<?php 

 		 			if($name == ""){
 		 				header( "Location: index.php" );
 		 			}
 		 			
 		 			echo '<div class="success">
						<img src="img/check.jpg" alt="">
						<p>你已成功报名</p>
 		 			</div>';

 		 			$outputstring = "姓名: ".$name."\t 电话: ".$phone."\t 学号: ".$number."\t 百公里: ".$confirm."\n";

 		 			@ $fp = fopen("signups.txt",'ab');

 		 			if (!$fp) {
 		 				echo "<p><strong> Your Order could not be processed at this time. Please try again later.</strong></p></body></html>";

 		 				exit;
 		 			}

 		 			fwrite($fp,$outputstring,strlen($outputstring));
 		 			flock($fp,LOCK_EX);
 		 			fclose($fp);
 		 		 ?>

 		 	</div>
 		 	
 		 </div>
 		 <footer>
 		 </footer>
 </body>
 </html>