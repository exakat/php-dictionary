# Reflection
PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime. Reflection is made possible by the Reflection API, which provides a set of classes and functions for introspecting objects and classes.

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

## See Also

+ [Introduction to PHP Reflection API](https://medium.com/tech-tajawal/introduction-to-php-reflection-api-4af07cc17db4)
+ [Understanding PHP Reflection: An In-Depth Guide with Examples](https://dev.to/galo4kin/understanding-php-reflection-an-in-depth-guide-with-examples-189n)
+ [Rewriting reflexion with Rust](https://scherzer.dev/Blog/20260710-reflection-rust)

Related : [Class](Class), [instance](instance), [Introspection](Introspection), [get_object_vars()](get_object_vars()), [new](new), [ReflectionException](ReflectionException), [Writeable](Writeable), [get_class_vars()](get_class_vars()), [Reflector](Reflector), [Code Generation](Code Generation), [Homoiconicity](Homoiconicity), [Meta-object Protocol (MOP)](Meta-object Protocol (MOP)), [Metaclass](Metaclass), [Metaprogramming](Metaprogramming)
