# get_class_vars()
``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array.

Unlike ``get_object_vars()``, which operates on an object instance, ``get_class_vars()`` takes a class name as a string and returns the default values of the class's declared properties, including inherited ones.

Only properties accessible from the current scope are returned.
```php
<?php

class Foo {
    public string $name = 'default';
    protected int $count = 0;
    private bool $active = true;
}

$vars = get_class_vars(Foo::class);
print_r($vars);
// Array ( [name] => default )  // only public properties visible in this scope

?>
```

Related : [get_class()](get_class()), [get_object_vars()](get_object_vars()), [Reflection](Reflection), [Introspection](Introspection)
