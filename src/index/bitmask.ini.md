# Bitmask
A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bitmask.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bitmask.ini.html","name":"Bitmask","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Bitmask.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Bitfield](bitfield.ini.html)
+ [Bitwise Operators](bitwise-operator.ini.html)

## Related packages

+ [gksh/bitmask](https://packagist.org/packages/gksh/bitmask)
