<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($isi->result() as $key): ?>
		<form action="http://localhost/12/index.php/user/login" method="post">

			
			<input type="text" name="username" placeholder="username" >
			<input type="text" name="password" placeholder="password" >
			<input type="submit" value="save">

		</form>
	<?php endforeach ?>
	
</body>
</html>

