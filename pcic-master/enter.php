<head>
	<body>
		<?php
		header("Content-Type:text/html; charset=utf-8");
		?>
		<?php
		if(empty($_POST['TALK'])){
			die("唉呀!真是糊塗...您忘記填寫意見了~");	
		}
		else{
		$content="{$_POST['TALK']}\n";
	    $fp = fopen('opinion.csv', "a+");   
		fwrite($fp,$content,strlen($content));
		fclose($fp);   
		header("location:index.php");
		}
		?>
		
	
	</body>

</head>
