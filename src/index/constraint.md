# Constraint
A constraint is a syntactic or semantic restriction on how a language construct may be used. Constraints are the rules a program must satisfy beyond mere grammatical correctness: for example, a ``break`` statement is only valid inside a loop or ``switch``, and a class marked ``final`` cannot be extended.

Violating a constraint typically produces a compile-time error, though some constraints are only checked at run time. Code that violates a constraint the engine does not check at all is a common source of undefined behavior.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constraint.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constraint.html","name":"Constraint","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 05:07:54 +0000","dateModified":"Thu, 27 Aug 2026 05:07:54 +0000","description":"A constraint is a syntactic or semantic restriction on how a language construct may be used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constraint.html"]}],"keywords":["concept","specification"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined-behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phplang.org\/spec\/03-terms-and-definitions.html"},{"@type":"CreativeWork","name":"PHP Constraints","url":"https:\/\/modelina.org\/docs\/constraints\/php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constraint"}]}]}</script>
```php
<?php

    final class Sealed {}

    // violates a constraint: a final class cannot be extended
    class Broken extends Sealed {}

?>
```

**[Documentation](https://phplang.org/spec/03-terms-and-definitions.html)**
## See Also

+ [PHP Constraints](https://modelina.org/docs/constraints/php)

## Related

+ [Behavior](behavior.html)
+ [Undefined Behavior](undefined-behavior.html)
+ [Syntax Error](syntax-error.html)
+ [Final Keyword](final.html)
