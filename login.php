<!DOCTYPE html>
<html>
<head>
	<title>BOOKSTORE</title>
	<script type="form1.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	body {
       	margin: 0;
  		font-family: Arial, Helvetica, sans-serif;
        }
		header {
  background-color: #333;
  position: relative;
}
div.form{
	background-color: pink;
	width:400px;
	height:350px;
	border: 1px solid black;
}
tr{
	font-size: 20px;
}
input{
	font-size: 20px;
}
footer{
       background-color: #333;
       position: relative;
       height: 240px;
       width: 100%;
}
</style>
</head>
<body style="background-color: White" style="overflow: scroll; overflow-x: scroll;">
	<header>
		<table><tr>
			<div>
			<td><img src="book-chor-logo-256.png" style="width:100px;height:100px;"></td>
			<td><h1 style = "color: red;font-size: 200%;">ONLINE BOOK SELLING</h1></td></div></tr>
		</table>
	</header>
	<br><br>
	<center>
	<div class="form">
	<h2 style = "color: black;text-align: center ; font-size: 250%;">Login</h2>
    <form id="myForm" action="connectlogin.php" method="post" >									
    <table border="1" style="background-color: White">
    <!--tr><th>E-mail:</th><td><input type="email" name="email" id="mail" placeholder="Enter your E-mail" required></td></tr-->
    <tr><th>Mobile: </th><td><input type="tel" name="mob" required></td></tr>
	<tr><th>password:</th><td><input type="password" name="password" id="pass1" required></td></tr>
	</table>
	<h3 style="color: Blue;font-size: 15px;float: right;margin-right: 2px">forgot password?</h3>
	<br><br><br>
	<button type="save" value="save" name="submit" onclick="window.location.href='FirstPage.html'" style="background-color: lightBlue; font-size: 20px; width:150px">Login</button>
	<br><br>
	<h>New to BookStore?</h><br>
	<button type="submit" onclick="window.location.href='SignUp.php'" style="background-color: Red; font-size: 20px; width:300px">Create Your BookStore Account
	</button>
    </form>
	</div>
	</center>
	<br>
	<footer >
		<table><tr style="font-size:  17px;">
		<td><h1 style="margin-left: 10px;margin-top: 10px;color: Red">About Us!</h1>
		<p style="margin-left: 10px;color: Green">Ever wanted to buy a book but could not because<br>
		  it was too expensive? worry not! because BookStore<br>
		  is here! Booktore, these days in news,is being <br>
		  called as the Robinhood of the world of books. <br>
		  BookStore team is committed to bring to you all <br>
		  kinds of best books at the minimal prices ever <br>
		  seen anywhere.
		</p></td>
		<td><h1 style="margin-top: 10px;color: Red">Contacts..</h1><address>
			<a href="tel:9954822536" style="color: White;"><img src="images.png" style="width:15px;height: 15px;">: 9954822536</a><br><br>
			<a href="https://bit.ly/2tRzDj5" style="color: White;"><img src="mail.jpg" style="width:15px;height: 15px;">: rajatstms@gmail.com</a><br>
			<p style="color: White;">Visit us at:<br><br>Chennai, Tamil Nadu</p>
			</address>
		</td>
		</tr>
		</table>
	</footer>
</body>
</html>															