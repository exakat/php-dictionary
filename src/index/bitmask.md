# Bitmask
A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitmask.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bitmask.html","name":"Bitmask","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Bitmask.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Bitmask"}]}]}</script>
```php
<?php

    $bitfield = 0b111; // 7
    $bitmask  = 0b100; // 4

    $result  = $bitfield | $bitmask; // 0b011 == 3

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Mask_(computing))**
## See Also

+ [How to use bitmasks in PHP](https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3)

## Related

+ [Bitfield](bitfield.html)
+ [Bitwise Operators](bitwise-operator.html)

## Related packages

+ [gksh/bitmask](https://packagist.org/packages/gksh/bitmask)
