# Smart Cast
A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression.

In Kotlin, after ``if (x is String)`` the compiler knows that ``x`` is a ``String`` inside that branch, and all ``String`` methods become available without casting. In TypeScript, a type guard such as ``typeof x === 'string'`` narrows ``x`` from ``string | number`` to ``string`` in the truthy branch. In both cases the narrowing is enforced by the compiler or type-checker: code that tries to use the variable as a different type is a compile-time error.

PHP does not support smart casts. PHP's type system is verified at runtime, not compile time. Within an ``instanceof`` or ``is_string()`` branch, PHP will call the correct methods, but:

+ There is no compile-time enforcement: the type-checker integrated into IDEs can simulate narrowing, but the PHP engine itself makes no such guarantee.
+ The programmer may still write code that uses the variable as a different type, and PHP will only raise an error, or silently coerce, at runtime.
+ PHP does not have union-type narrowing built into the runtime in the sense that Kotlin's compiler tracks flow.

Static analysis tools approximate smart-cast behaviour through flow-sensitive type inference, but this is a tool-level feature, not a language-engine feature.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/smart-cast.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/smart-cast.html","name":"Smart Cast","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:38:20 +0000","dateModified":"Thu, 13 Aug 2026 05:38:20 +0000","description":"A smart cast, also called compiler-enforced type narrowing, is a feature where the compiler automatically refines the static type of a variable inside a branch, based on a preceding type-check, without requiring the programmer to insert an explicit cast expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Smart Cast.html"]}],"alternateName":["compiler-enforced-type-narrowing"],"keywords":["unsupported","type","cast"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-declaration-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-narrowing.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/kotlinguide.com\/examples\/smart-cast-example"},{"@type":"CreativeWork","name":"Kotlin smart casts","url":"https:\/\/kotlinlang.org\/docs\/typecasts.html#smart-casts"},{"@type":"CreativeWork","name":"TypeScript type narrowing","url":"https:\/\/www.typescriptlang.org\/docs\/handbook\/2\/narrowing.html"},{"@type":"CreativeWork","name":"PHPStan type narrowing","url":"https:\/\/phpstan.org\/writing-php-code\/narrowing-types"},{"@type":"CreativeWork","name":"Psalm \u2013 Typing in Psalm","url":"https:\/\/psalm.dev\/docs\/annotating_code\/type_syntax\/atomic_types\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"smart-cast"}]}]}</script>
```php
<?php

    // PHP runtime checks: no compiler-enforced narrowing.
    function process(int|string $value): string {
        if (is_string($value)) {
            // SCA will narrow $value to string here,
            // but the PHP engine itself does not enforce this at compile time.
            return strtoupper($value);
        }
    
        // $value is int here: again, tools narrow, not the engine.
        return (string) ($value * 2);
    }
    
    // instanceof narrows for IDEs and static analysers, not for the runtime.
    function describe(object $obj): string {
        if ($obj instanceof \DateTimeImmutable) {
            // Tools know $obj is DateTimeImmutable; PHP does not enforce it statically.
            return $obj->format('Y-m-d');
        }
        return get_class($obj);
    }

?>
```

**[Documentation](https://kotlinguide.com/examples/smart-cast-example)**
## See Also

+ [Kotlin smart casts](https://kotlinlang.org/docs/typecasts.html#smart-casts)
+ [TypeScript type narrowing](https://www.typescriptlang.org/docs/handbook/2/narrowing.html)
+ [PHPStan type narrowing](https://phpstan.org/writing-php-code/narrowing-types)
+ [Psalm – Typing in Psalm](https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/)

## Related

+ [Cast Operator](cast.html)
+ [instanceof](instanceof.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Typed Property](typed-property.html)
+ [Type Narrowing](type-narrowing.html)
