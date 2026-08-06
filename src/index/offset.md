# Offset
The term offset refers to the position or index of an element within an array or a string. Offsets are usually integers.

For strings, offsets are zero-based and count bytes rather than characters, so multi-byte encodings such as UTF-8 require ``mb_substr()`` or similar multibyte-aware functions to index by character instead of by byte. Since PHP 7.1, negative string offsets are supported and count from the end of the string, ``$string[-1]`` is the last byte; negative offsets on plain arrays, by contrast, are treated as literal array keys and do not wrap around to the end.

Offsets are used throughout the language: ``substr()``, ``strpos()``, and ``array_slice()`` all accept a starting offset, and often an optional length, and classes implementing the ``ArrayAccess`` interface, with ``offsetGet()``, ``offsetSet()``, ``offsetExists()``, ``offsetUnset()``, let objects support the ``$obj[$offset]`` square-bracket syntax like a native array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/offset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/offset.html","name":"Offset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:09:20 +0000","dateModified":"Thu, 16 Jul 2026 08:09:20 +0000","description":"The term offset refers to the position or index of an element within an array or a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Offset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['a', 'b', 'c'];
    $offset = 1;
    echo $array[$offset];  // b
    
    $string = 'ABC';
    $offset = 2;
    echo $string[$offset];  // C

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## Related

+ [Array, []](array.ini.html)
+ [String](string.ini.html)
+ [Index For Arrays](index-array.ini.html)
