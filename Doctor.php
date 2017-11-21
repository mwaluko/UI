<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
<title>UI Database v.06Mar2009</title>
</head>
<body topmargin="5" leftmargin="5" rightmargin="5" bottommargin="5" bgcolor="#FFFFFF">
<div align="center">
<?php
//Start session
@session_start();

//Check session for existed authentication variables 
if(isset($_SESSION['Uname']) && isset($_SESSION['Pwd']))
  {
?>
<!-- Start of header area -->
<table width="980" height="100" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="980" height="16"><img src="images/HeaderDialog_01.jpg" width="980" height="16" alt=""></td>
	</tr>
	<tr>
		<td width="980" height="61" background="images/HeaderDialog_02.jpg" align="center" valign="top">&nbsp;&nbsp;&nbsp;<font class="HeadingFont">UI Database (Mahosot)</font><br />&nbsp;&nbsp;&nbsp;<font class="MiniFont">All Clinical Data - Factory No. 2 and Bacteria Atect *** UI Database v.06Mar2009 *** Wellcome Trust - Mahosot Hospital - Oxford Tropical Medicine Research Collaboration</font></td>
	</tr>
	<tr>
		<td width="980" height="23"><img src="images/HeaderDialog_03.jpg" width="980" height="23" alt=""></td>
	</tr>
</table>
<!-- End of header area -->
<!-- Start of display area -->
<table width="980" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="980" height="20"><img src="images/DisplayDialog_01.jpg" width="980" height="20" alt=""></td>
	</tr>
	<tr>
		<td width="980" background="images/DisplayDialog_02.jpg" align="center" valign="top">
<table width="950" border="0" cellpadding="0" cellspacing="0">
	<tr>
      <td align="left" valign="top">
      <div align="right"><font class="NormalFont">Username: <b><?php echo $_SESSION['Uname']; ?></b> | <a href="logout.php?<?php echo SID; ?>" onmouseover="style.color = '#FF0066'" onmouseout = "style.color = '#0000FF'" title="Click this link to log out of the system">Log out</a></font></div>
<font class="BigFont">Navigation:  <a href="Main.php?<?php echo SID; ?>" onmouseover="style.color = '#FF0066'" onmouseout = "style.color = '#0000FF'" title="Click this link to go to the main menu page">Main Menu</a> &gt; Lookup Data Setting (<a href="Doctor.php?<?php echo SID; ?>" onmouseover="style.color = '#FF0066'" onmouseout = "style.color = '#0000FF'" title="Click this link to go to the Lookup Data Setting (Doctor) page">Doctor</a>)</font><br />        
      
        
<?php   
	//Block login user with privilege = 1 to click unassign link
	if($_SESSION['Privilege'] == 2) 
	  {  
?>
<table width="940" border="0" cellpadding="0" cellspacing="0">
	<tr>
      <td align="left" valign="top" width="500"><br />
<font class="NormalFont"><b>Existed Doctor</b> | <a href="DoctorForm.php?DoctorMode=add" target="iframeDoctorForm" onmouseover="style.color = '#FF0066';" onmouseout="style.color = '#0000FF';" title="Add new Doctor into the database">Add New Doctor</a><br /></font>    
<iframe src="DoctorData.php" width="525" height="250" frameborder="1" style="border-color:#CCCCCC" name="iframeDoctorData" scrolling="yes"></iframe>
      </td>
      <td align="left" valign="top">
<br />
<br />
<iframe src="DoctorForm.php" width="410" height="250" frameborder="0" name="iframeDoctorForm" scrolling="no" align="middle"></iframe>
      </td>
    </tr>
</table>    
<?php 		
	  }
	else 
	  { 
	    echo "<br /><br /><br /><font class=\"ErrorFont\">Access denied! Your user account does not have enough privilege to open this page.</font><br />";
	  }
?>


      </td>
    </tr>
</table>
        </td>
	</tr>
	<tr>
		<td width="980" height="25"><img src="images/DisplayDialog_03.jpg" width="980" height="25" alt=""></td>
	</tr>
</table>
<!-- Start of display area -->
<?php 	  
  }
else
  {
	    echo "<br /><font class=\"HeadingFont\">UI Database</font><br /><br /><br /><font class=\"ErrorFont\">Page has already expired!</font><br />";
		echo "<font class=\"NormalFont\"><a href=\"index.php?".SID."\" onmouseover=\"style.color = '#FF0066'\" onmouseout = \"style.color = '#0000FF'\">Please log in first</a></font>";	    
  }	  
?>
</div>
</body>
</html>
