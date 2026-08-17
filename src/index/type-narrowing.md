# Type Narrowing
Type narrowing is the general process of refining the type of a value to a more specific subtype within a scope, based on information gathered from a preceding check: a type test, a comparison, an assignment, or a control-flow branch. It is a property of the type system or of the analysis performed on top of it, not of any single language feature.

Type narrowing shows up under many names depending on where it is enforced: TypeScript calls it ``control flow analysis``, Kotlin calls the compiler-enforced form a ``smart cast``, Flow and mypy narrow types across ``isinstance``/``typeof`` guards, and Rust's borrow checker narrows ``Option<T>`` after a ``match`` arm destructures it. In all these systems the compiler tracks, statement by statement, which subtype a variable is guaranteed to hold, and rejects code that contradicts that guarantee.

PHP's engine performs no static narrowing: types are checked at runtime, not tracked through control flow at compile time. Narrowing code is therefore always the work of an external tool:

+ Some static analysis tools narrow variables inside ``instanceof``, ``is_string()``/``is_int()``/etc., ``isset()``, ``array_key_exists()``, and ``match``/``switch`` branches, purely for static-analysis purposes.
+ Custom assertions, ``@psalm-assert`` and ``@phpstan-assert`` annotations, extend narrowing to user-defined predicate functions.
+ None of this narrowing is enforced by the PHP runtime; a value can still be used inconsistently with the narrowed type and only fail, if at all, when the offending operation actually executes.

``smart-cast`` names the specific compiler-enforced flavor of narrowing found in languages like Kotlin and TypeScript; type narrowing is the broader concept those features are instances of.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-narrowing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-narrowing.html","name":"Type Narrowing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:08:48 +0000","dateModified":"Wed, 08 Jul 2026 16:08:48 +0000","description":"Type narrowing is the general process of refining the type of a value to a more specific subtype within a scope, based on information gathered from a preceding check: a type test, a comparison, an assignment, or a control-flow branch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Narrowing.html"]}],"alternateName":["flow-sensitive-typing"],"keywords":["concept","type","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/smart-cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-widening.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-analysis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Type_system#Type_narrowing"},{"@type":"CreativeWork","name":"TypeScript type narrowing","url":"https:\/\/www.typescriptlang.org\/docs\/handbook\/2\/narrowing.html"},{"@type":"CreativeWork","name":"PHPStan type narrowing","url":"https:\/\/phpstan.org\/writing-php-code\/narrowing-types"},{"@type":"CreativeWork","name":"Psalm \u2013 Typing in Psalm","url":"https:\/\/psalm.dev\/docs\/annotating_code\/type_syntax\/atomic_types\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-narrowing"}]}]}</script>
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

+ [Smart Cast](smart-cast.html)
+ [Type Widening](type-widening.html)
+ [instanceof](instanceof.html)
+ [Type System](type-system.html)
+ [Type Checking](type-checking.html)
+ [Gradual Type Checking](gradual-type-checking.html)
+ [Union Type](union-type.html)
+ [Static Code Analysis (SCA)](static-analysis.html)
