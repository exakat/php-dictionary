# Reified Types
Reified types are generic type parameters that are kept at runtime, so the code can check or create the actual type argument while the program runs. In languages that erase generics at compile time, such as Java, ``List<String>`` and ``List<Integer>`` are the same class at runtime. A reified type parameter, as in Kotlin's ``inline fun <reified T> f()``, lets the code test ``x is T`` or instantiate ``T`` directly.

PHP has no generics, and its type system does not carry type arguments at runtime. Types such as ``array``, ``iterable`` or ``Traversable`` cannot be parameterised, and there is no syntax to pass a type as a value that the code can inspect or instantiate by its name. The closest equivalents are passing a class name as a string and using ``new $class()``, or ``instanceof`` against a fixed class, but neither is a type parameter.

Generics are discussed in their own entry; reified types only make sense on top of them.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reified-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reified-type.html","name":"Reified Types","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:37:54 +0000","dateModified":"Tue, 10 Nov 2026 11:37:54 +0000","description":"Reified types are generic type parameters that are kept at runtime, so the code can check or create the actual type argument while the program runs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reified-type.html"]}],"alternateName":["reified-generics"],"keywords":["concept","not supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/kotlinlang.org\/docs\/inline-functions.html#reified-type-parameters"},{"@type":"CreativeWork","name":"Kotlin: Reified type parameters","url":"https:\/\/kotlinlang.org\/docs\/inline-functions.html#reified-type-parameters"},{"@type":"CreativeWork","name":"PHP: Generators","url":"https:\/\/www.php.net\/manual\/en\/language.generators.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reified-type"}]}]}</script>
```php
<?php

    // Java / Kotlin style: T is available at runtime
    // inline fun <reified T> isA(x: Any) = x is T

    // PHP: no type parameter, the class must be named explicitly
    function isA(object $x, string $class): bool {
        return $x instanceof $class;
    }

?>
```

**[Documentation](https://kotlinlang.org/docs/inline-functions.html#reified-type-parameters)**
## See Also

+ [Kotlin: Reified type parameters](https://kotlinlang.org/docs/inline-functions.html#reified-type-parameters)
+ [PHP: Generators](https://www.php.net/manual/en/language.generators.php)

## Related

+ [Generics](generics.html)
+ [instanceof](instanceof.html)
+ [PHP Natives](native-type.html)
+ [Types Erasure](type-erasure.html)
