# Idiomatic
Idiomatic code follows the conventions and constructs that are natural to a specific language, rather than code that merely compiles or runs correctly. Idiomatic PHP favors the features and patterns that the language and its ecosystem consider normal, readable and maintainable, over literal translations of patterns from other languages.

Writing idiomatic PHP means picking the tool the language actually offers for a given problem: a ``foreach`` loop instead of manual index bookkeeping, ``??`` instead of ``isset()`` ternaries, typed properties instead of ad-hoc docblocks. Non-idiomatic code often signals that the author is more familiar with another language, or that the codebase has not kept up with the evolution of PHP.

A short list of idiomatic PHP features:

+ ``foreach`` to iterate arrays and ``Traversable``, rather than indexed ``for`` loops;
+ Null coalescing operator ``??`` and null coalescing assignment ``??=``, rather than ``isset()`` combined with a ternary;
+ Nullsafe operator ``?->`` to chain calls on a possibly null object;
+ Arrow functions ``fn() => ...`` for short closures that capture the outer scope implicitly;
+ Spread operator ``...`` to unpack arrays into arguments, and variadic parameters to collect them;
+ Named arguments to make call sites self-documenting and to skip optional parameters;
+ Typed properties, constructor property promotion and readonly properties, rather than untyped properties documented only in a docblock;
+ Enums, rather than class constants used to emulate a closed set of values;
+ Match expressions, rather than ``switch`` with fallthrough or repeated ``break``;
+ Interfaces and first-class callable syntax, rather than string or array callables;
+ Exceptions for error handling, rather than mixed return values or error codes;
+ PSR autoloading and Composer, rather than manual ``require``/``include`` chains.

What counts as idiomatic changes with each PHP version: a construct that was idiomatic in version 5 may be superseded once a more direct language feature is introduced.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idiomatic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idiomatic.html","name":"Idiomatic","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 05:31:03 +0000","dateModified":"Tue, 01 Sep 2026 05:31:03 +0000","description":"Idiomatic code follows the conventions and constructs that are natural to a specific language, rather than code that merely compiles or runs correctly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idiomatic.html"]}],"keywords":["concept","convention"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/best-practice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coding-convention.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/convention.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arrow-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-nullsafe-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php-fig.org\/psr\/psr-12\/"},{"@type":"CreativeWork","name":"What does 'idiomatic' mean in programming?","url":"https:\/\/en.wikipedia.org\/wiki\/Programming_idiom"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"idiomatic"}]}]}</script>
```php
<?php

    // Not idiomatic: manual index, isset()+ternary, switch with breaks
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        $name = isset($user['name']) ? $user['name'] : 'Anonymous';

        switch ($user['role']) {
            case 'admin':
                $label = 'Administrator';
                break;
            case 'editor':
                $label = 'Editor';
                break;
            default:
                $label = 'Guest';
        }
    }

    // Idiomatic PHP: foreach, ??, match
    foreach ($users as $user) {
        $name = $user['name'] ?? 'Anonymous';

        $label = match ($user['role']) {
            'admin'  => 'Administrator',
            'editor' => 'Editor',
            default  => 'Guest',
        };
    }

?>
```

**[Documentation](https://www.php-fig.org/psr/psr-12/)**
## See Also

+ [What does 'idiomatic' mean in programming?](https://en.wikipedia.org/wiki/Programming_idiom)

## Related

+ [Best Practices](best-practice.html)
+ [Coding Conventions](coding-convention.html)
+ [Convention](convention.html)
+ [Readable](readable.html)
+ [Match](match.html)
+ [Coalesce Operator](coalesce.html)
+ [Arrow Functions](arrow-function.html)
+ [Object Nullsafe Operator ?->](object-nullsafe-operator.html)
+ [Named Parameters](named-parameter.html)
+ [Enumeration (enum)](enum.html)
