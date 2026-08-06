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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reflection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reflection.html","name":"Reflection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:15:07 +0000","dateModified":"Tue, 14 Jul 2026 05:15:07 +0000","description":"PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Reflection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

   Reflection::export(new ReflectionClass('Exception'));

?>
```

**[Documentation](https://www.php.net/manual/en/book.reflection.php)**
## See Also

+ [Introduction to PHP Reflection API](https://medium.com/tech-tajawal/introduction-to-php-reflection-api-4af07cc17db4)
+ [Understanding PHP Reflection: An In-Depth Guide with Examples](https://dev.to/galo4kin/understanding-php-reflection-an-in-depth-guide-with-examples-189n)
+ [Rewriting reflexion with Rust](https://scherzer.dev/Blog/20260710-reflection-rust)

## Related

+ [Class](class.ini.html)
+ [instance](instance.ini.html)
+ [Introspection](introspection.ini.html)
+ [get\_object\_vars()](get_object_vars.ini.html)
+ [new](new.ini.html)
+ [ReflectionException](reflectionexception.ini.html)
+ [Writeable](writeable.ini.html)
+ [get\_class\_vars()](get_class_vars.ini.html)
+ [Reflector](reflector.ini.html)
+ [Code Generation](code-generation.ini.html)
+ [Homoiconicity](homoiconicity.ini.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.ini.html)
+ [Metaclass](metaclass.ini.html)
+ [Metaprogramming](metaprogramming.ini.html)

## Related packages

+ [bramus/reflection](https://packagist.org/packages/bramus/reflection)
+ [roave/better-reflection](https://packagist.org/packages/roave/better-reflection)
