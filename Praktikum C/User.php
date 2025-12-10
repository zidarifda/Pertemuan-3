<?php 
class User {
    public function __construct(
        public string $name = "Guest",
        public int $age = 0
    ) {}
}

$u1 = new User();              //tanpa parameter
$u2 = new User("Rani", 22);    //dua parameter

echo $u1->name . "\n";
echo $u2->name . "\n";
