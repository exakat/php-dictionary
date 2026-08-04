# Mutable State
Mutable state refers to data that can be changed after it is created.

Most objects and arrays are mutable by default. Mutable state can lead to bugs in concurrent environments and makes code harder to reason about.

PHP offers several mechanisms to create immutable state:

+ ``readonly`` properties, since PHP 8.1+
+ Immutable classes, like ``DateTimeImmutable``
+ Final classes to prevent modification via inheritance.
```php
<?php

    // Mutable state
    class User {
        public string $name;
    }
    
    $user = new User();
    $user->name = 'Alice';
    $user->name = 'Bob'; // Mutable

?>
```

Related : [State](State), [Immutable](Immutable), [Readonly](Readonly), [Properties](Properties), [Side Effect](Side Effect)
