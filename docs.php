<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>docs</title>
<style type="text/css">
		.container{
			padding: 30px;
		}
	</style>
</head>
<body>
<div>
<?php
 $con = mysqli_connect('localhost','root');
 mysqli_select_db($con,'register');
 $q = "select * from `articles`";
 $qfire = mysqli_query($con,$q);
 $num = mysqli_num_rows($qfire);
 if($num > 0)
 {
	while($product = mysqli_fetch_array($qfire))
	{
?>  
   <div class="container">
   <embed src="<?php echo $product['data'];?>" type="application/pdf" width="100%" height="600px"></embed>
   </div>
	<?php
    }
 }
 ?>
</div>
</body>
</html>