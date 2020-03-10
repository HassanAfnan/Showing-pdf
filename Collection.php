<?php
  if(isset($_POST["find"]))
  {
	  header('Location:docs.php');
  }
?>		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>collection</title>
</head>
<body>
      <form name="form1" method="post">
     <!-- <input type="text" placeholder="Search here"/>-->
      <button type="submit" name="find" value="find">Show</button>
      </form>
</body>
</html>
