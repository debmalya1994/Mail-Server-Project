<input type="submit" name="del" value="Delete"/><hr/>
<h1>Spam</h1><hr/>
<?php
$user=$_SESSION['user'];
$od=opendir("User_Data/$user/spam");
while($f=readdir($od))
	{
     if($f!="." && $f!="..")
	 {
	 echo "<form method='post'>";
	 echo "<input type='checkbox' name='chk[]' value='$f'>";
	 echo "<a href='home.php?conspam=$f'>$f</a><hr/>";
	 }
	}
?>
</form>
<?php
if(isset($_POST['del']))
{
   $cb=$_POST['chk'];
	foreach($cb as $v)
	{
	copy("User_Data/$user/spam/$v","User_Data/$user/trash/$v");
	unlink("User_Data/$user/spam/$v");
	}
}
?>
