# declare()
``declare()``is used to set execution directives for a block of code.

``declare()`` may set the following values: 

+ ``strict_types``: strict typing in the block
+ ``ticks``: generate a tick event 
+ ``encoding``: per-file encoding directive

``declare()`` affects some configuration for the next block of code.

It is a language construct.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declare.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declare.html","name":"declare()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"declare()is used to set execution directives for a block of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declare.html"]}],"keywords":["language construct"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tick.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/declare-encoding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-structure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.declare.php"},{"@type":"CreativeWork","name":"Why use declare(strict_types=1) in PHP \u2013 Fast tips","url":"https:\/\/dev.to\/inspector\/why-use-declarestricttypes1-in-php-fast-tips-3c1"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"declare"}]}]}</script>
```php
<?php

    declare(strict_types=1, encoding='UTF-8');

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.declare.php)**
## See Also

+ [Why use declare(strict_types=1) in PHP – Fast tips](https://dev.to/inspector/why-use-declarestricttypes1-in-php-fast-tips-3c1)

## Related

+ [strict\_types](strict_types.html)
+ [Tick](tick.html)
+ [declare Encoding](declare-encoding.html)
+ [Control Flow](control-flow.html)
+ [Control Structures](control-structure.html)
+ [Unicode](unicode.html)
