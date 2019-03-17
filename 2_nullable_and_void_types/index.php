<?php


class User
{
    protected $age;


    public function age() : ?int
    {
        return $this->age;
    }

    public function subscribe(?callable $callback = null): void
    {
        var_dump('subscribing here');

        if ($callback) {
            $callback();
        }
    }
}

$age = (new User(null))->age();

// (new User)->subscribe(function () {
//     var_dump('repsonse here');
// });

// (new User)->subscribe([]);

(new User)->subscribe();

// (new User)->subscribe(null);

// var_dump($age);
