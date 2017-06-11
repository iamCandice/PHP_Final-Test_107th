
<html>
	<head>
		<title>使用PHPMailer寄信</title>
	</head>
	<body>
		<form action="" method="post">
			sender name:<input type="text" name="sName"><br/>
			sender email: <input type="text" name="sEmail"><br/>
			receiver name: <input type="text" name="rName"><br/>
			title: <input type="text" name="title"><br/>
			content: <br/><textarea name="content" id="" cols="30" rows="10"></textarea><br/>
			<input type="submit" value="send">
		</form>
	</body>
</html>
<?php
	require("PHPMailer/PHPMailerAutoload.php");

	$sName=$_POST["sName"];
	$sEmail=$_POST["sEmail"];
	$rName=$_POST["rName"];
	$title=$_POST["title"];
	$content=$_POST["content"];

	$mail=new PHPMailer();
	$mail->SMTPDebug=1;
	$mail->IsSMTP();

	$mail->SMTPAuth=true;
	$mail->Host="ssl://smtp.gmail.com";
	$mail->Port=465;

	$mail->Username="candiceblake1223@gmail.com";
	$mail->Password="";
	$mail->CharSet="utf-8";
	$mail->From = $sEmail;
    $mail->FromName = $sName;
	$mail->Subject=$title;
	$mail->AddAddress('candiceblake1223@gmail.com');

	$mail->Body=$content;
	$mail->send();
?>