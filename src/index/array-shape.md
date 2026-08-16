# Array Shape
An array shape is a type annotation that describes an array by its exact set of keys and the type of the value stored under each one, instead of describing it only by the type of its elements in general. ``array{name: string, age: int}`` denotes an array that has a ``name`` key holding a ``string`` and an ``age`` key holding an ``int``, as opposed to the coarser ``array<string, int|string>``, which only says the array maps strings to a mix of integers and strings without tying any particular key to any particular type.

Array shapes are a PHPDoc annotation, written in a ``@param``, ``@return``, or ``@var`` docblock tag. They can mark optional keys with a trailing ``?``, allow additional unlisted keys with ``...``, and can be nested to describe arrays of arrays. They are the array analogue of row polymorphism / open record types found natively in languages such as TypeScript or ``OCaml``.

PHP's engine has no notion of array shape: an ``array`` type declaration accepts any array regardless of which keys it holds or what is stored under them, and nothing is checked at runtime about individual keys. Array shapes exist purely as a static-analysis annotation, verified by tools at analysis time; the PHP runtime performs no corresponding check, so a function documented with an array shape still receives whatever array is actually passed, keys missing or not.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-shape.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-shape.html","name":"Array Shape","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:38:38 +0000","dateModified":"Tue, 11 Aug 2026 08:38:38 +0000","description":"An array shape is a type annotation that describes an array by its exact set of keys and the type of the value stored under each one, instead of describing it only by the type of its elements in general","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Shape.html"]}],"keywords":["concept","type","static analysis","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/row-polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structural-typing.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phpstan.org\/writing-php-code\/phpdoc-types#array-shapes"},{"@type":"CreativeWork","name":"Psalm array types","url":"https:\/\/psalm.dev\/docs\/annotating_code\/type_syntax\/array_types\/#array-shapes"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-shape"}]}]}</script>
```php
<?php

    /**
     * @param array{name: string, age: int, email?: string} $user
     */
    function greet(array $user): string {
        // PHPStan/Psalm know $user['name'] is a string and $user['age'] an int;
        // the PHP engine enforces none of this at runtime.
        $greeting = 'Hello, ' . $user['name'];
    
        if (isset($user['email'])) {
            $greeting .= ' (' . $user['email'] . ')';
        }
    
        return $greeting;
    }
    
    // Nothing stops this call at runtime, even though the shape is violated.
    greet(['name' => 'Ada']);

?>
```

**[Documentation](https://phpstan.org/writing-php-code/phpdoc-types#array-shapes)**
## See Also

+ [Psalm array types](https://psalm.dev/docs/annotating_code/type_syntax/array_types/#array-shapes)

## Related

+ [Row Polymorphism](row-polymorphism.html)
+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Generics](generics.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Static Code Analysis (SCA)](static-analysis.html)
+ [Structural Typing](structural-typing.html)
