# Weak References
Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures. 
```php
<?php

$obj = new stdClass;
$weakref = WeakReference::create($obj);

var_dump($weakref->get());
unset($obj);

var_dump($weakref->get());
// NULL

?>
```

## See Also

+ [PHP 8.0 feature focus: Weak maps](https://platform.sh/blog/php-80-feature-focus-weak-maps/)
+ [WeakReferences](https://www.cmuir.co.nz/post/weakreferences/)

Related : [References](References), [Circular Reference](Circular Reference)
