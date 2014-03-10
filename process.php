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
 		 				echo '<a href="index.php" title="" class="success-button"><img src="img/success-btn.png" alt=""></a>
 		 					</div>
 		 					</div>
					 		 <footer>
					 		 </footer>
						 </body>
						 </html>';
 		 				exit;
 		 			}
 		 			
 		 			echo '<div class="success"><img src="img/success.png" alt=""></div>';

 		 			$outputstring = "姓名: ".$name."\t 电话: ".$phone."\t 学号: ".$number."\t 是否: ".$confirm."\n;

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