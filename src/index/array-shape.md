# Array Shape
An array shape is a type annotation that describes an array by its exact set of keys and the type of the value stored under each one, instead of describing it only by the type of its elements in general. ``array{name: string, age: int}`` denotes an array that has a ``name`` key holding a ``string`` and an ``age`` key holding an ``int``, as opposed to the coarser ``array<string, int|string>``, which only says the array maps strings to a mix of ints and strings without tying any particular key to any particular type.

Array shapes are a PHPDoc annotation, written in a ``@param``, ``@return``, or ``@var`` docblock tag. They can mark optional keys with a trailing ``?``, allow additional unlisted keys with ``...``, and can be nested to describe arrays of arrays. They are the array analogue of row polymorphism / open record types found natively in languages such as TypeScript or OCaml.

PHP's engine has no notion of array shape: an ``array`` type declaration accepts any array regardless of which keys it holds or what is stored under them, and nothing is checked at runtime about individual keys. Array shapes exist purely as a static-analysis annotation, verified by tools at analysis time; the PHP runtime performs no corresponding check, so a function documented with an array shape still receives whatever array is actually passed, keys missing or not.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-shape.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-shape.html","name":"Array Shape","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:19:11 +0000","dateModified":"Thu, 16 Jul 2026 08:19:11 +0000","description":"An array shape is a type annotation that describes an array by its exact set of keys and the type of the value stored under each one, instead of describing it only by the type of its elements in general","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Shape.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Row Polymorphism](row-polymorphism.ini.html)
+ [Type System](type-system.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Generics](generics.ini.html)
+ [Gradual Type Checking](gradual-type-checking.ini.html)
+ [Static Code Analysis (SCA)](static-analysis.ini.html)
+ [Structural Typing](structural-typing.ini.html)
