<?php

$ALLOWED_EXTENSION = env('ALLOWED_EXTENSION', 'png,jpg,jpeg');
$ALLOWED_EXTENSION = explode(',', $ALLOWED_EXTENSION);

$REQUIRED_FIELDS = ['name', 'surname', 'lang'];

$errors = [];

foreach ($REQUIRED_FIELDS as $field) {
	if (empty($_POST[$field])) {
		$errors[$field] = 'Filed muts not be empty';
	}
}

if (!isset($_FILES['photo'])) {
	$errors['photo'] = 'Photo required';
}

$photo = $_FILES['photo'];

$ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
$ext = strtolower($ext);

if (!in_array($ext, $ALLOWED_EXTENSION)) {
	$errors['photo'] = 'File not alllowed';
}

if (count($errors)) {
	ajaxResponse($errors, FALSE, 'Validation problems', 422);
}

if ($ext == 'jpg' || $ext == 'jpeg') {
	$photoResource = imagecreatefromjpeg($photo['tmp_name']);
} else {
	$photoResource = imagecreatefrompng($photo['tmp_name']);
}

$background = imagecreate(env('BACKGROUND_WIDTH', 500), env('BACKGROUND_HEIGHT', 500));

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;

$sx = imagesx($photoResource);
$sy = imagesy($photoResource);

$white = imagecolorallocate($background, 255, 255, 255);
$red = imagecolorallocate($background, 255, 0, 0);

imagecopy(
	$background, $photoResource, 
	imagesx($background) - $sx - $marge_right, imagesy($background) - $sy - $marge_bottom, 
	0, 0, 
	imagesx($photoResource), imagesy($photoResource)
);

// Set Path to Font File
$font_path = ROOT_PATH . '/resources/fonts/open-sans/OpenSans-BoldItalic.ttf';

$y = 25;

foreach ($REQUIRED_FIELDS as $field) {
	$text = $field . ': ' . (is_array($_POST[$field]) ? implode(',', $_POST[$field]) : $_POST[$field]);

	imagettftext($background, 10, 0, 25, $y, $red, $font_path, $text);

	$y += 25;
}

$name = generateRandomString(16);

$date = date('Y/m/d');

$path = ROOT_PATH . '/profiles/' . $date;

if (!is_dir($path)) {
	mkdir($path, 0777, TRUE);
}

$path = sprintf('%s/%s.%s', $path, $name, $ext);

imagepng($background, $path);
imagedestroy($background);

$path = str_replace(ROOT_PATH, '', $path);

ajaxResponse([
	'php' => sprintf('http://%s/?module=load&name=%s.%s&date=%s', env('APP_URL', 'localhost'), $name, $ext, str_replace('/', '-', $date)),

	// https://en.wikipedia.org/wiki/Symbolic_link
	// ln -s /home/code-academy/PHP/2021-12-13/cv/profiles /home/code-academy/PHP/2021-12-13/cv/public
	'nginx' => sprintf('http://%s%s', env('APP_URL', 'localhost'), $path),
]);