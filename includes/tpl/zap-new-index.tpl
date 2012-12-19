<head>
<title>Zap: Homepage</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body><br><br>
<div id="container">
	<div id = 'head'>
	<a href='index.php'>
		<div id = 'logo'>
		</div>
		</a>
		<div id ='usersonline'>
		%hotel_status%
		</div>
	</div>
<div id="login_background">

<div id="login">
<center><b><font color='red'>Zap Hotel has had a reset.</font></b></center><br />
 New here? <a href="/register" style="font-weight: bold;">REGISTER FOR FREE</a><br />
      <br />
            <form method="post" action="index.php">
        Username:<br />
        <input type="text" name="credentials.username" value="Username" onfocus="if (this.value == 'Username') this.value = '';" /><br />
        <br />
        Password:<br />
        <input type="password" name="credentials.password" value="Password" onfocus="if (this.value == 'Password') this.value = '';" /><br />
        <br />
        <center><align='right'><input type="submit" name="login" value="Sign In" /></align></center>
      </form>
	  </div>
</div>
</div>

</body>