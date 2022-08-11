<?php

class User {
	public string $name;

	function __construct(string $name)
	{
		$this->name = $name;
	}
}

class Users
{
	private array $users = [];

	public function add(User $user) : array
	{
		$this->users[] = $user;

		return $this->users;
	}

	public function addMore(array $users)
	{
		foreach ($users as $user) {
			$this->add($user);
		}
	}

	public function show() : string
	{
		$result = "<ul>\n";

		foreach ($this->users as $user) {
			$result .= "<li>{$user->name}</li>\n";
		}

		$result .= "</ul>\n";

		return $result;
	}
}

$userCollection = new Users;

$userA = new User('A');

$userCollection->add($userA);

$userCollection->addMore([
	new User('B'),
	new User('C'),
	new User('D'),
]);

echo $userCollection->show();