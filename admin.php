

<?php
if(isset($_SESSION['user']) && $_SESSION['user']=="loged out")
{
require_once("admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Systems Engineering Humidex Project</title>
<link rel="stylesheet" type="text/css" href="admin_style.css" />
</head>

<body>
<div id="wrap">
  <div id="header">
     <div class="title"><br />
     </div>
  </div>
      <div id="admin_header">
      USER LOGIN
  </div>
      <div id="admin_part">
        <form id="form1" name="form1" method="post" action="check.php">
          <table width="600" border="0">
            <tr>
              <td height="50"><label style="float:right">Username</label></td>
              <td><input type="text" name="usname" id="usname" size="40" style="height:25px; margin-left:10px;" required="required" />
             
              </td>
            </tr>
            <tr>
              <td height="50"><label style="float:right">Password</label></td>
              <td><input type="password" name="pass" id="pass" size="40" style="height:25px; margin-left:10px;" required="required" />
              
              </td>
              
            </tr>
            
            <tr>
          
              <td height="100"> </td>
              <td>
              <input type="submit" name="submit" id="submit" value="Submit" style="margin-left:10px; height:30px; width:100px; color:#666666; font-weight:bold" /><br  />
               <span id="test" style="color:#FF0000"></span>
              </td>
              
            </tr>
          </table>
        </form>
        
      </div>
</div>
</body>
</html>
