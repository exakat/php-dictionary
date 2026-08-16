# Type Widening
Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it.

Two distinct mechanisms both go by this name:

+ Numeric widening: Java and C promote ``byte``/``short``/``int`` operands to ``long``, ``float``, or ``double`` as needed so an arithmetic operation can proceed without loss of the smaller operand's value.
+ Literal widening in type inference: TypeScript infers the literal type ``'red'`` for a ``const``, but widens it to the general type ``string`` as soon as the value is assigned to a mutable ``let`` binding, because the compiler can no longer assume the value stays that one literal.

Widening is the opposite of narrowing: narrowing makes a type more specific from context, widening makes it more general.

PHP has a limited, one-directional form of numeric widening: an ``int`` argument is silently widened to ``float`` when passed to a parameter or property declared ``float``, and this conversion is allowed even under ``declare(strict_types=1)`` as the sole documented exception to strict type checking. PHP has no literal types to widen in the TypeScript sense, and no user-visible widening between other scalar types: any other conversion, such as ``string`` to ``int``, is coercion, governed by ``strict_types``, rather than widening a value that already fits within a numeric hierarchy.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-widening.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-widening.html","name":"Type Widening","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:15:33 +0000","dateModified":"Fri, 10 Jul 2026 09:15:33 +0000","description":"Type widening is the conversion of a value or a declared type toward a broader, more general one: a narrower numeric type is promoted to a wider one in an expression, or a specific literal type loses its precision and is generalized to its base type once it escapes the context that produced it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Widening.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-widening"}]}]}</script>
```php
<?php

    declare(strict_types=1);
    
    function scale(float $factor): float {
        return $factor * 2;
    }
    
    // int is widened to float here, even under strict_types:
    // this is the one implicit conversion the engine still performs.
    echo scale(3);

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict)**
## See Also

+ [TypeScript literal widening](https://www.typescriptlang.org/docs/handbook/type-inference.html#widening-and-narrowing-in-typescript)
+ [Java widening primitive conversion](https://docs.oracle.com/javase/specs/jls/se17/html/jls-5.html#jls-5.1.2)

## Related

+ [Type Narrowing](type-narrowing.html)
+ [strict\_types](strict_types.html)
+ [Cast Operator](cast.html)
+ [Literal Types](literal-types.html)
+ [Type System](type-system.html)
+ [Gradual Type Checking](gradual-type-checking.html)
