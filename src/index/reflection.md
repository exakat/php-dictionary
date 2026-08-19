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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html","name":"Reflection","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:17 +0000","dateModified":"Wed, 19 Aug 2026 06:47:17 +0000","description":"PHP reflection is a feature that allows inspecting and interacting with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Reflection.html"]}],"keywords":["extension","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/introspection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflectionexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writeable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflector.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-generation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/homoiconicity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/meta-object-protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaclass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.reflection.php"},{"@type":"CreativeWork","name":"Introduction to PHP Reflection API","url":"https:\/\/medium.com\/tech-tajawal\/introduction-to-php-reflection-api-4af07cc17db4"},{"@type":"CreativeWork","name":"Understanding PHP Reflection: An In-Depth Guide with Examples","url":"https:\/\/dev.to\/galo4kin\/understanding-php-reflection-an-in-depth-guide-with-examples-189n"},{"@type":"CreativeWork","name":"Rewriting reflexion with Rust","url":"https:\/\/scherzer.dev\/Blog\/20260710-reflection-rust"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reflection"}]}]}</script>
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

+ [Class](class.html)
+ [instance](instance.html)
+ [Introspection](introspection.html)
+ [get\_object\_vars()](get_object_vars.html)
+ [new](new.html)
+ [ReflectionException](reflectionexception.html)
+ [Writeable](writeable.html)
+ [get\_class\_vars()](get_class_vars.html)
+ [Reflector](reflector.html)
+ [Code Generation](code-generation.html)
+ [Homoiconicity](homoiconicity.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.html)
+ [Metaclass](metaclass.html)
+ [Metaprogramming](metaprogramming.html)

## Related packages

+ [bramus/reflection](https://packagist.org/packages/bramus/reflection)
+ [roave/better-reflection](https://packagist.org/packages/roave/better-reflection)
