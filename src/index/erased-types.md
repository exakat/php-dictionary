# Erased Types
Erased types are type parameters or annotations that exist while the code is analysed or compiled, and are gone when the program runs. The runtime only sees the raw class or array, so ``List<String>`` and ``List<Integer>`` are the same object at execution time.

Java and TypeScript erase their generics this way. Kotlin's ``reified`` type parameters are the opposite: they are kept at runtime, which is why they are a separate entry.

PHP erases its generic types too, but only in the sense of docblock annotations. ``@template T`` and ``@param list<Order>`` are read by static analysers such as ``PHPStan`` and ``Psalm``, and the engine never sees them. Nothing is checked when the code runs, so a wrong element type passes silently unless a tool catches it first.

Erased types are not the same as type erasure, which is the process of removing annotations when the code is deployed. Erased types describe the kind of type that does not survive to runtime.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/erased-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/erased-types.html","name":"Erased Types","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Nov 2026 20:57:01 +0000","dateModified":"Fri, 06 Nov 2026 20:57:01 +0000","description":"Erased types are type parameters or annotations that exist while the code is analysed or compiled, and are gone when the program runs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/erased-types.html"]}],"keywords":["type","concept","not supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-erasure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-parametricity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpdoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpstan.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psalm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phpstan.org\/writing-php-code\/phpdocs-basics#generics"},{"@type":"CreativeWork","name":"Psalm: Templated types","url":"https:\/\/psalm.dev\/docs\/templated_annotations\/"},{"@type":"CreativeWork","name":"Kotlin: Reified type parameters","url":"https:\/\/kotlinlang.org\/docs\/inline-functions.html#reified-type-parameters"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.40","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"erased-types"}]}]}</script>
```php
<?php

    /**
     * @template T
     * @param list<T> $items
     * @return list<T>
     */
    function firstTwo(array $items): array {
        return array_slice($items, 0, 2);
    }

    // At runtime, only the array is known: the element type is erased
    firstTwo([new Order(), new Order()]);

?>
```

**[Documentation](https://phpstan.org/writing-php-code/phpdocs-basics#generics)**
## See Also

+ [Psalm: Templated types](https://psalm.dev/docs/templated_annotations/)
+ [Kotlin: Reified type parameters](https://kotlinlang.org/docs/inline-functions.html#reified-type-parameters)

## Related

+ [Types Erasure](type-erasure.html)
+ [Generics](generics.html)
+ [Type Parametricity](type-parametricity.html)
+ [PHPdoc](phpdoc.html)
+ [PHPStan](phpstan.html)
+ [Psalm](psalm.html)
+ [Template](template.html)
