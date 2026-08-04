# Used
Used is a state of a PHP structure. It has been declared, defined or created, but it is actually referred to in another expression. By essence, all structures should be used, as least once.

Being used happens in different ways: 

+ Constants are read
+ Variables are read, modified, unset
+ Parameters are read
+ Properties are read, modified, unset
+ Methods are called 
+ Classes are instantiated, called for their method, constants, properties
+ Traits are imported in a class or another trait
+ Interfaces are implemented, mentioned with ``instanceof`` or specified as type

``use`` expression do not guarantee usage: they import a structure, and alias it, but it, too, may be unused.

Usage may depend on an initial call that is never happening in production.
```php
<?php

    const A = 1;
    use const A as B;

    echo A;
    echo B;

?>
```

Related : [Unused](Unused)
