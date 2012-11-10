<?php require_once('Connections/connuser.php'); ?>
<?php
// *** Validate request to login to this site.
session_start();

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($accesscheck)) {
  $GLOBALS['PrevUrl'] = $accesscheck;
  session_register('PrevUrl');
}

if (isset($_POST['Username'])) {
  $loginUsername=$_POST['Username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "bindex.htm";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_connuser, $connuser);
  
  $LoginRS__query=sprintf("SELECT Username, Password FROM users WHERE Username='%s' AND Password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $connuser) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $GLOBALS['MM_Username'] = $loginUsername;
    $GLOBALS['MM_UserGroup'] = $loginStrGroup;	      

    //register the session variables
    session_register("MM_Username");
    session_register("MM_UserGroup");

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<?php
// *** Validate request to login to this site.
session_start();

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($accesscheck)) {
  $GLOBALS['PrevUrl'] = $accesscheck;
  session_register('PrevUrl');
}

if (isset($_POST['Username'])) {
  $loginUsername=$_POST['Username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "bindex.htm";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_connuser, $connuser);
  
  $LoginRS__query=sprintf("SELECT Username, Password FROM users WHERE Username='%s' AND Password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $connuser) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $GLOBALS['MM_Username'] = $loginUsername;
    $GLOBALS['MM_UserGroup'] = $loginStrGroup;	      

    //register the session variables
    session_register("MM_Username");
    session_register("MM_UserGroup");

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
.style3 {
	font-family: calibri;
	font-size: 16px;
	text-align: center;
}
.shop {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	font-size: 16px;
	font-style: italic;
}
-->
</style>
</head>

<body onLoad="MM_preloadImages('Buttons/Homebuttonrollover.jpg','Buttons/Newsbuttonrollover.jpg','Buttons/ThebandButtonRollover.jpg','Buttons/Tourbuttonrollover.jpg','Buttons/linksbuttonrollover.jpg')">
<center>
  <p><img src="Buttons/StereophonicsLogo.jpg" alt="CriesOnHopeSt Logo" width="1024" height="200"></p>
  <p><a href="Index.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','Buttons/Homebuttonrollover.jpg',1)"><img src="Buttons/Homebutton.jpg" alt="Home" name="Image2" width="120" height="400" hspace="20" vspace="1" border="0"></a><a href="News.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','Buttons/Newsbuttonrollover.jpg',1)"><img src="Buttons/Newsbutton.jpg" alt="News" name="Image3" width="120" height="400" hspace="20" vspace="1" border="0"></a><a href="TheBand.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','Buttons/ThebandButtonRollover.jpg',1)"><img src="Buttons/ThebandButton.jpg" alt="Band" name="Image4" width="120" height="400" hspace="20" vspace="1" border="0"></a><a href="Tour.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','Buttons/Tourbuttonrollover.jpg',1)"><img src="Buttons/Tourbutton.jpg" alt="Tour" name="Image5" width="120" height="400" hspace="20" vspace="1" border="0"></a><a href="login.php"><img src="Buttons/Mediabutttonrollover.jpg" alt="Shop" width="120" height="400" hspace="20" vspace="1" border="0"></a><a href="Links.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','Buttons/linksbuttonrollover.jpg',1)"><img src="Buttons/linksbutton.jpg" alt="Links" name="Image7" width="120" height="400" hspace="20" vspace="1" border="0"></a><br>
  </p>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<span class="shop"><br>

    <center>
      <span class="shop">To buy merchandise from us you must first log into our systems, add your items and then go to basket and buy!<br>
    Users should log into our systems using the following details -<strong> <br>
  <br>
      Username:</strong> admin <strong>Password:</strong> admin</span>
    </center>
<span class="shop"></span></span><br>
<br>
  
<form name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
  <table width="376" height="77" border="0" align="center">
    <tr>
      <td width="239"> <span class="style3">Username/Defnyddiwr  </span></td>
      <td width="121"><input name="Username" type="text" id="Username"></td>
    </tr>
    <tr>
      <td> <span class="style3">Password/Cyfrinair  </span></td>
      <td><input name="Password" type="password" id="Password"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center">
        <input name="Submit" type="submit" class="style3" id="Submit" value="Login">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
