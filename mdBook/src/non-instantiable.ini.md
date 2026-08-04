# Non-instantiable
Usually, classes are turned into objects via instantiation. Yet, some classes are not capable of that: they are non-instantiable.

This is the case of some native classes, such as SQLite3Result, which must be created by the dedicated methods: they can't be created by custom code. 

In userland code, non-instantiable classes have a private constructor, which makes them impossible to instantiate, unless there is a named constructor.
```php
<?php

class X {
    private function __construct() {}
}

// 
new X();

?>
```

Related : [instance](instance)
