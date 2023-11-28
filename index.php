<?php
class User{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function __toString(): string
    {
        return $this->name;
    }
}

$user = new User('John Wick');
var_dump($user);



