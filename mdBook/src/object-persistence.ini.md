# Object Persistence
Object persistence is the feature that keeps an object available between two different PHP requests, on a web server.

In practice, this is achieved by saving a current object, with its properties and data, so that it may be reconstructed later. 

This is achieved natively with the ``serialize()`` and ``unserialize()`` functions. 

The text representation of the object may then be stored in various medium, such as files, sessions, database. 

It is also possible to achieve object persistence by using a different format, such as json, xml, csv, etc. The whole process works similarly to PHP's own process, though it has to be reconstructed entirely.

Object persistence may save the values of the object's property, such as scalars or arrays; or it may remove data, and reconstruct it later, such as database connections, composed objects or references.
```php
<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

// Create an object
$user = new User('Damien', 'damien@exakat.io');

// Serialize the object
$serializedUser = serialize($user);

// Save to a file (or database)
file_put_contents('user.txt', $serializedUser);

// Later, reconstruct the object
$loadedUser = unserialize(file_get_contents('user.txt'));

echo $loadedUser->name; // Outputs: Damien

?>
```

## See Also

+ [Persist Large Object Graphs in PHP](https://dev.to/melia72/persist-php-objects-without-a-database-5fip)

Related : [Session](Session), [Persistence](Persistence), [Snapshot](Snapshot)
