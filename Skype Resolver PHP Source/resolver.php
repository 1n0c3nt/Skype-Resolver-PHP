<title>Inocent Resolver</title>
<link rel="shortcut icon" href="icon.png">
<center>
<link rel="stylesheet" type="text/css" href="sty.css">
<center><img size: 1m src="a.png"></center>
<center><img size: 1m src="text.gif"></center>
<p><font color="#000" class="marquee"></p>
<form method="post">
<input type="text" class="username" name="username" />
<br>
<input type="submit" name="submit" class="buton" value="Get IP"/>
<br>
<?php
if(isset($_POST['submit'])) 
{
	$name = $_POST['username'];

	$result = file_get_contents("https://resolver.wtf/api?type=skypereal&key=XKdQw1pj&value={$name}");
	echo "$name 's IP: $result <br>";
	echo "<img src=\"https://api.skype.com/users/{$name}/profile/avatar\">";
}
?>
<p>
</p>
<font color="#FFFFFF" class="marquee">Numero Total De Visitantes</font><div ><a href='http://contador.s12.com.br'><img src='https://contador.s12.com.br/img-bd5787d721AZx07d-26.gif' border='0' alt='estatisticas gratis'></a><script type='text/javascript' src='http://contador.s12.com.br/ad.js?id=bd5787d721AZx07d'></script></div><br></center>
<!doctype html>
<html>
<head>
    <style>
     
        </style>
</head>
<body>
    
    <marquee behavior=lorem direction=left >Realtime IP Adress</marquee>
    <marquee behavior=lorem slide direction="right">The Best Resolver</span></marquee>
<embed src="https://www.youtube.com/v/sV2t3tW_JTQ&autoplay=1" type="application/x-shockwave-flash" wmode="transparent" width="1" height="1">
</body>
</html>
</form>
</center>