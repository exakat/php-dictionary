# Type Narrowing
Type narrowing is the general process of refining the type of a value to a more specific subtype within a scope, based on information gathered from a preceding check: a type test, a comparison, an assignment, or a control-flow branch. It is a property of the type system or of the analysis performed on top of it, not of any single language feature.

Type narrowing shows up under many names depending on where it is enforced: TypeScript calls it ``control flow analysis``, Kotlin calls the compiler-enforced form a ``smart cast``, Flow and mypy narrow types across ``isinstance``/``typeof`` guards, and Rust's borrow checker narrows ``Option<T>`` after a ``match`` arm destructures it. In all these systems the compiler tracks, statement by statement, which subtype a variable is guaranteed to hold, and rejects code that contradicts that guarantee.

PHP's engine performs no static narrowing: types are checked at runtime, not tracked through control flow at compile time. Narrowing code is therefore always the work of an external tool:

+ Some static analysis tools narrow variables inside ``instanceof``, ``is_string()``/``is_int()``/etc., ``isset()``, ``array_key_exists()``, and ``match``/``switch`` branches, purely for static-analysis purposes.
+ Custom assertions, ``@psalm-assert`` and ``@phpstan-assert`` annotations, extend narrowing to user-defined predicate functions.
+ None of this narrowing is enforced by the PHP runtime; a value can still be used inconsistently with the narrowed type and only fail, if at all, when the offending operation actually executes.

``smart-cast`` names the specific compiler-enforced flavor of narrowing found in languages like Kotlin and TypeScript; type narrowing is the broader concept those features are instances of.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-narrowing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-narrowing.html","name":"Type Narrowing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:08:48 +0000","dateModified":"Wed, 08 Jul 2026 16:08:48 +0000","description":"Type narrowing is the general process of refining the type of a value to a more specific subtype within a scope, based on information gathered from a preceding check: a type test, a comparison, an assignment, or a control-flow branch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Narrowing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function describe(int|string $value): string {
        if (is_int($value)) {
            // Static analysers narrow $value to int in this branch;
            // the PHP engine performs no such tracking.
            return "int: " . ($value + 1);
        }
    
        // Narrowed to string here, again only for the analyser's benefit.
        return "string: " . strtoupper($value);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Type_system#Type_narrowing)**
## See Also

+ [TypeScript type narrowing](https://www.typescriptlang.org/docs/handbook/2/narrowing.html)
+ [PHPStan type narrowing](https://phpstan.org/writing-php-code/narrowing-types)
+ [Psalm – Typing in Psalm](https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/)

## Related

+ [Smart Cast](smart-cast.ini.html)
+ [Type Widening](type-widening.ini.html)
+ [instanceof](instanceof.ini.html)
+ [Type System](type-system.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Gradual Type Checking](gradual-type-checking.ini.html)
+ [Union Type](union-type.ini.html)
+ [Static Code Analysis (SCA)](static-analysis.ini.html)
