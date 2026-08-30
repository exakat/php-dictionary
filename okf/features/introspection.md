---
type: "concept"
title: "Introspection"
description: "Introspection is the ability to examine the properties and behavior of objects, classes, and functions at runtime."
resource: "https://www.php.net/manual/en/book.reflection.php"
tags: ["concept", "introspection", "animal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Introspection

Introspection is the ability to examine the properties and behavior of objects, classes, and functions at runtime. It allows code to discover and inspect its own structure.

PHP provides many native introspection functions: ``get_class()``, ``get_object_vars()``, ``get_class_vars()``, ``get_class_methods()``, ``method_exists()``, ``property_exists()``, ``function_exists()``, ``is_a()``, ``instanceof``, and others.

For deeper introspection, the Reflection API provides programmatic access to class hierarchies, method signatures, parameter types, and attributes.

```php
<?php

    class Dog {
        public string $name = 'Rex';
        public function bark(): void {}
    }
    
    $dog = new Dog();
    
    var_dump(get_class($dog));             // string(3) "Dog" 
    var_dump(get_object_vars($dog));       // Array ( [name] => Rex )
    var_dump(get_class_methods($dog));     // Array ( [0] => bark )
    var_dump(method_exists($dog, 'bark')); // bool(true)

?>
```

## Documentation
- [https://www.php.net/manual/en/book.reflection.php](https://www.php.net/manual/en/book.reflection.php)

## See Also
- [PHP Introspection Functions and Example Program](https://www.computerscienceai.com/2019/11/php-introspective-functions-and-example-program.html)

## Related
- [Reflection](/features/reflection.md)
- [get_class()](/features/get_class.md)
- [get_class_vars()](/features/get_class_vars.md)
- [get_object_vars()](/features/get_object_vars.md)
- [class_implements()](/features/class_implements.md)
- [Reflector](/features/reflector.md)

## Details
- Extension: ext-reflection

