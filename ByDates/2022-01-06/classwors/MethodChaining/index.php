<?php

require 'Tag.php';

$tag = new Tag('a');

$tag->setText('title');
$tag->setText('title');
$tag->setText('title');
$tag->setText('title');

$tag->setAttr('href', 'index.html');
$tag->setAttr('href', 'index.html');
$tag->setAttr('href', 'index.html');
$tag->setAttr('href', 'index.html');
$tag->setAttr('href', 'index.html');

// var_dump($tag);
var_dump($tag->get());

$tag->show();

echo "\n";

$tag = new Tag('a');

// var_dump($tag->setText('title'));
 
$tag->setText('title')->setAttr('href', 'index.html')->show();

echo $tag->setText('text')->setAttr('href', 'index.html')->get();

echo "\n";

(new Tag('a'))->setText('title')
	->setAttr('href', 'index.html')
	->setAttr('class', 'btn btn-success')
	->setAttr('id', 'go')
	->show();