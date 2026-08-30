---
type: "PHP Feature"
title: "get_object_vars()"
description: "``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values."
resource: "https://www.php.net/manual/en/function.get-object-vars.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# get_object_vars()

``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values. 

``get_object_vars()`` does not return static properties, which are class level, and not object level. 

``get_object_vars()`` does not return uninitialized properties. It returns all existing properties, may they be specified in the class definition, or not. It returns the trait and the parent properties.

``get_object_vars()`` respect visibility, so its result may differ depending on its calling location: ``private`` properties are only visible when ``get_object_vars()`` is called from within the class itself; ``protected`` may be visible when called from a child; otherwise, only ``public`` properties are returned.

Constants are not returned by that function. 

``get_object_vars()`` is very similar to the ``(array)`` cast operator. It is very different from the ``get_class_vars()`` method, which returns the properties as defined in the class, and including the static properties. It is also possible to use ``json_encode()`` followed by ``json_decode()``, though some data might get lost in the translation process.

```php
<?php

trait T {
    public $w = '3';
}

class X {
    use T;
    
    private int $p = 1;
    private int $q = 2;
    public int $r = 3;
    public int $s = 4;
    public int $t;
    
    static string $v = 'abc';
    
    function __construct() {
        unset($this->s);

        $this->u = 6;
    }
}

print_r(get_object_vars(new x));

/**
Array
(
    [r] => 3
    [w] => 3
    [u] => 6
)
*/
?>
```

## Documentation
- [https://www.php.net/manual/en/function.get-object-vars.php](https://www.php.net/manual/en/function.get-object-vars.php)

## See Also
- [Object-Oriented PHP: Autoloading, Serializing, and Querying Objects](https://www.elated.com/object-oriented-php-autoloading-serializing-and-querying-objects/)
- [Convert PHP object to array](https://www.stechies.com/convert-php-object-array/)

## Related
- [get_class_vars()](/features/get_class_vars.md)
- [Reflection](/features/reflection.md)
- [Visibility](/features/visibility.md)
- [Properties](/features/property.md)
- [Cast Operator](/features/cast.md)
- [json_encode()](/features/json_encode.md)
- [Static Property](/features/static-property.md)
- [Introspection](/features/introspection.md)

