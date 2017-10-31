<?php session_start(); ?>
<?php include('templates/header.php');?>
</center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>My mail page</title>
<style>
body{margin-top:-2px}
table{margin:auto;}

a{border-radius:10px;text-decoration:none;margin-left:6%;font-size:25px;font-style:italic}
a:hover{color:#00FF00;background:#660099}
</style>
</head>
<body>
<table width="100%" height="100%" border="0">
  <tr>
    <td height="165" colspan="2" bgcolor="#663399" style="background-image:url(image/logo1.JPG)"><h1 align="center">
	<font color="#1e3c6d" face="cursive">MailServer</h1></td>
  </tr>
  <tr>
    <td height="42" colspan="2" bgcolor="#FF00CC">
	<a href="index.php">HOME</a>
	<a href="index.php?option=about">ABOUT</a>
	<a href="index.php?option=service">SERVICES</a>
	<a href="index.php?option=contact">CONTACT</a>
	<a href="index.php?option=registration">REGISTRATION</a>
	<a href="index.php?option=login">LOGIN</a>
	</td>
  </tr>
  <tr>
    <td width="801" height="450" valign="top" bgcolor="#FFCCFF">
	<?php
	@$opt=$_GET['option'];
	//echo $opt;
	if($opt=="")
	{
	?>
	
	This project provide services to exchange or transfer the mail using file system concept.
To hold data we using only file system instead database.
In this project we exchange or transfer the mail using file system .
this project is work similar to gmail system. User information stored inside the directory.
registration page is make to enter the user details. details are stored inside the directory using file system concept.
<br><br>
Session is used to hold the particular user details:Each time when a new user login or registration.
Session keep the details of the particular user.
<br><br>
Login Page permits only existing user to login the mailserver page.
Compose is used to sent mail whose email address is matched ,compose and hit send, sent mail reached to recipient email address inbox with message and attachment.
All received mail collected on inbox. all received mail are shown in inbox.
draft is hold the copy of send mail. copy of a sent mail is also stored in a sent
<br><br>
User can change the password: first check the existing password(old password), then new-password or confirm password must matched.
it replace old password with new password.now user can login with new generated password.
	
	<br/>
	<?php
	}
	else
	{
	switch($opt)
	{
	case 'login';
	include('login.php');
	break;
	case 'about';
	include('about.php');
	break;
	case 'service';
	include('services.php');
	break;
	case 'registration';
	include('regis.php');
	break;
	case 'contact';
	include('contact.php');
	break;
	case 'fpass';
	include('forgotpass.php');
	break;
	}
	}
	?>
	</td>
    <td width="275" bgcolor="#999999" valign="top"><h2>Latest News</h2></td>
  </tr>
  <tr>
    <td colspan="2" align="center">Developed By Debmalya</td>
  </tr>
</table>
</body>
</html>
