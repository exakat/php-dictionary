# new
``new`` creates a new object from a class. This operation is called the instantiation. 

The class must be available at instantiation call: the engine searches for it in the declared classes, then calls the autoloader to find it. In case no class is found, an error is emitted.

The instantiation calls immediatly the constructor of the object: it is the method called ``__construct``. 

The constructor defines how many arguments are needed. When no argument is needed, ``new`` may also be called without parenthesis.
```php
<?php

    class X {
        function __construct($a = 1) {}
    }
    
    // instantiation
    $x = new x($a);
    
    $y = new y;

?>
```

Related : [Chaining New Without Parenthesis](Chaining New Without Parenthesis), [Dynamic Class](Dynamic Class), [New In Initializers](New In Initializers), [New Without Parenthesis](New Without Parenthesis), [Reflection](Reflection), [instance](instance), [Static Call](Static Call)
