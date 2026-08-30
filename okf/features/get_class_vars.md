---
type: "PHP Feature"
title: "get_class_vars()"
description: "``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array."
resource: "https://www.php.net/manual/en/function.get-class-vars.php"
tags: ["native function", "introspection"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/function.get-class-vars.php](https://www.php.net/manual/en/function.get-class-vars.php)

## See Also
- [PHP get_class_vars() Function](https://www.geeksforgeeks.org/php/php-get_class_vars-function/)
- [The get_class_vars Function - Getting Class Properties in PHP](https://code.mu/en/php/manual/oop/get_class_vars/)

## Related
- [get_class()](/features/get_class.md)
- [get_object_vars()](/features/get_object_vars.md)
- [Reflection](/features/reflection.md)
- [Introspection](/features/introspection.md)

