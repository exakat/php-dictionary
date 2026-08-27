# Strict
The word ``strict`` appears in several distinct PHP concepts:

+ ``strict_types`` declare directive: a per-file directive, ``declare(strict_types=1)``, that disables PHP's automatic scalar type coercion. When active, passing a value of the wrong type to a typed parameter raises a ``TypeError`` rather than silently casting the value.
+ Strict comparison: the use of identity operators ``===`` and ``!==`` instead of equality operators ``==`` and ``!=``. Strict comparison checks both value and type, bypassing type juggling. The ``match`` expression and the third parameter of ``in_array()`` also operate in strict mode.
+ Gradual type checking: the type system is optional and enforced at runtime. ``strict_types`` tightens enforcement within a file but does not affect calls coming from other files. This is distinct from compile-time strict type systems found in statically typed languages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict.html","name":"Strict","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:33:10 +0000","dateModified":"Thu, 23 Jul 2026 13:33:10 +0000","description":"The word strict appears in several distinct PHP concepts:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict.html"]}],"keywords":["disambiguation","type","_noDocumentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gradual-type-checking.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strict"}]}]}</script>
```php
<?php
declare(strict_types=1);

// strict_types: TypeError, no silent cast
function square(int $n): int { return $n * $n; }

// strict comparison: false, different types
var_dump(0 === false);

// strict in_array: false, '1' !== 1
var_dump(in_array('1', [1, 2, 3], true));

?>
```

## Related

+ [strict\_types](strict_types.html)
+ [Strict Comparison](strict-comparison.html)
+ [Type Checking](type-checking.html)
+ [Relaxed Comparison](relaxed-comparison.html)
+ [Type Juggling](type-juggling.html)
+ [in\_array()](in_array.html)
+ [Match](match.html)
+ [Gradual Type Checking](gradual-type-checking.html)
