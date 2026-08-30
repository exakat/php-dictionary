---
type: "extension"
title: "Reflection"
description: "PHP reflection is a feature that allows inspecting and interacting with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime."
resource: "https://www.php.net/manual/en/book.reflection.php"
tags: ["extension", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Reflection

PHP reflection is a feature that allows inspecting and interacting with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime. Reflection is made possible by the Reflection API, which provides a set of classes and functions for introspecting objects and classes.

PHP offers a complete API to describe classes, methods, interfaces, constants, functions, extensions, traits, enums and their components. 

+ ReflectionAttribute
+ ReflectionClass
+ ReflectionClassConstant
+ ReflectionEnum
+ ReflectionEnumBackedCase
+ ReflectionEnumUnitCase
+ ReflectionException
+ ReflectionExtension
+ ReflectionFiber
+ ReflectionFunction
+ ReflectionFunctionAbstract
+ ReflectionGenerator
+ ReflectionIntersectionType
+ ReflectionMethod
+ ReflectionNamedType
+ ReflectionObject
+ ReflectionParameter
+ ReflectionProperty
+ ReflectionReference
+ ReflectionType
+ ReflectionUnionType
+ ReflectionZendExtension
+ Reflector

Reflection is also available in other programming languages.

```php
<?php

   Reflection::export(new ReflectionClass('Exception'));

?>
```

## Documentation
- [https://www.php.net/manual/en/book.reflection.php](https://www.php.net/manual/en/book.reflection.php)

## See Also
- [Introduction to PHP Reflection API](https://medium.com/tech-tajawal/introduction-to-php-reflection-api-4af07cc17db4)
- [Understanding PHP Reflection: An In-Depth Guide with Examples](https://dev.to/galo4kin/understanding-php-reflection-an-in-depth-guide-with-examples-189n)
- [Rewriting reflexion with Rust](https://scherzer.dev/Blog/20260710-reflection-rust)

## Related
- [Class](/features/class.md)
- [instance](/features/instance.md)
- [Introspection](/features/introspection.md)
- [get_object_vars()](/features/get_object_vars.md)
- [new](/features/new.md)
- [ReflectionException](/features/reflectionexception.md)
- [Writeable](/features/writeable.md)
- [get_class_vars()](/features/get_class_vars.md)
- [Reflector](/features/reflector.md)
- [Code Generation](/features/code-generation.md)
- [Homoiconicity](/features/homoiconicity.md)
- [Meta-object Protocol (MOP)](/features/meta-object-protocol.md)
- [Metaclass](/features/metaclass.md)
- [Metaprogramming](/features/metaprogramming.md)

## Details
- Packagist: [bramus/reflection](https://packagist.org/packages/bramus/reflection)
- Packagist: [roave/better-reflection](https://packagist.org/packages/roave/better-reflection)

