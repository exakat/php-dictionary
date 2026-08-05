# declare()
``declare()``is used to set execution directives for a block of code.

``declare()`` may set the following values: 

+ ``strict_types``: strict typing in the block
+ ``ticks``: generate a tick event 
+ ``encoding``: per-file encoding directive

``declare()`` affects some configuration for the next block of code.

It is a language construct.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/declare.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/declare.ini.html","name":"declare()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:32:37 +0000","dateModified":"Mon, 03 Aug 2026 16:32:37 +0000","description":"``declare()``is used to set execution directives for a block of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/declare().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    declare(strict_types=1, encoding='UTF-8');

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.declare.php)**
## See Also

+ [Why use declare(strict_types=1) in PHP – Fast tips](https://dev.to/inspector/why-use-declarestricttypes1-in-php-fast-tips-3c1)

## Related

+ [strict\_types](strict_types.ini.html)
+ [Tick](tick.ini.html)
+ [declare Encoding](declare-encoding.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Control Structures](control-structure.ini.html)
+ [Unicode](unicode.ini.html)
