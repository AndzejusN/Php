<?php

// https://en.wikipedia.org/wiki/Singleton_pattern

class DatabaseConnector
{
	private static $instance = NULL;

    private function __construct($hostname, $username, $password) {
    	// make connection
    }

    public static function connect($hostname, $username, $password)
    {
    	return self::getInstance($hostname, $username, $password);
    }

    public static function getInstance($hostname = NULL, $username = NULL, $password = NULL)
    {
        if (self::$instance === NULL) {
        	// var_dump('created', $hostname, $username, $password);

            // self::$instance = new self($hostname, $username, $password);
            self::$instance = new DatabaseConnector($hostname, $username, $password);
        }

        return self::$instance;
    }
}

DatabaseConnector::connect('localhost', 'root', 'password');
// DatabaseConnector::getInstance('localhost', 'root', 'password');

// UserController.php
// $db = DatabaseConnector::getInstance('localhost-1', 'root-1', 'password-1');
$db = DatabaseConnector::getInstance();

var_dump($db);

// PostController.php
// $db = DatabaseConnector::getInstance('localhost-2', 'root-2', 'password-2');
$db = DatabaseConnector::getInstance();

var_dump($db);

// FileController.php
// $db = DatabaseConnector::getInstance('localhost-3', 'root-3', 'password-3');
$db = DatabaseConnector::getInstance();

var_dump($db);

