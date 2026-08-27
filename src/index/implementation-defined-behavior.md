# Implementation-Defined Behavior
Implementation-defined behavior is behavior that the language specification leaves to the engine to decide, on the condition that the engine picks one consistent option and documents it. Unlike undefined behavior, the result is always predictable once the specific engine and its documentation are known.

Examples include the size of an ``int``, 32 or 64 bits, depending on the platform, the precision of ``float`` operations, and the exact wording of engine-generated error messages.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implementation-defined-behavior.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implementation-defined-behavior.html","name":"Implementation-Defined Behavior","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 05:06:03 +0000","dateModified":"Thu, 27 Aug 2026 05:06:03 +0000","description":"Implementation-defined behavior is behavior that the language specification leaves to the engine to decide, on the condition that the engine picks one consistent option and documents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implementation-defined-behavior.html"]}],"alternateName":["implementation-defined"],"keywords":["concept","specification"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unspecified-behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined-behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php_int_max.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phplang.org\/spec\/03-terms-and-definitions.html"},{"@type":"CreativeWork","name":"Implementation-defined behavior - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Undefined_behavior#Implementation-defined_behavior"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"implementation-defined-behavior"}]}]}</script>
```php
<?php

    // implementation-defined: the size of PHP_INT_MAX depends on the platform
    var_dump(PHP_INT_MAX); // int(9223372036854775807) on a 64-bit build
                           // int(2147483647) on a 32-bit build

?>
```

**[Documentation](https://phplang.org/spec/03-terms-and-definitions.html)**
## See Also

+ [Implementation-defined behavior - Wikipedia](https://en.wikipedia.org/wiki/Undefined_behavior#Implementation-defined_behavior)

## Related

+ [Behavior](behavior.html)
+ [Unspecified Behavior](unspecified-behavior.html)
+ [Undefined Behavior](undefined-behavior.html)
+ [PHP\_INT\_MAX](php_int_max.html)
