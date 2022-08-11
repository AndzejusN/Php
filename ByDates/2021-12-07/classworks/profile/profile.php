<?php
require_once 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<img src="<?php echo $profilePicture; ?>">
	<?php if (!empty($_POST['name'])): ?>
	<h1><?php echo $_POST['name'] ?></h1>
	<?php else: ?>
	<h3 style="color:red"> name not found</h3>
	<?php endif;?>
</body>
</html>