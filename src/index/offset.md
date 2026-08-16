# Offset
The term offset refers to the position or index of an element within an array or a string. Offsets are usually integers.

For strings, offsets are zero-based and count bytes rather than characters, so multi-byte encodings such as UTF-8 require ``mb_substr()`` or similar multibyte-aware functions to index by character instead of by byte. Since PHP 7.1, negative string offsets are supported and count from the end of the string, ``$string[-1]`` is the last byte; negative offsets on plain arrays, by contrast, are treated as literal array keys and do not wrap around to the end.

Offsets are used throughout the language: ``substr()``, ``strpos()``, and ``array_slice()`` all accept a starting offset, and often an optional length, and classes implementing the ``ArrayAccess`` interface, with ``offsetGet()``, ``offsetSet()``, ``offsetExists()``, ``offsetUnset()``, let objects support the ``$obj[$offset]`` square-bracket syntax like a native array.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/offset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/offset.html","name":"Offset","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:23 +0000","dateModified":"Fri, 07 Aug 2026 09:44:23 +0000","description":"The term offset refers to the position or index of an element within an array or a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Offset.html"]}],"keywords":["array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.array.php"},{"@type":"CreativeWork","name":"PHP RFC: Negative String Offsets","url":"https:\/\/wiki.php.net\/rfc\/negative-string-offsets"},{"@type":"CreativeWork","name":"PHP: substr - Manual","url":"https:\/\/www.php.net\/manual\/en\/function.substr.php"},{"@type":"CreativeWork","name":"PHP: ArrayAccess - Manual","url":"https:\/\/www.php.net\/manual\/en\/class.arrayaccess.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"offset"}]}]}</script>
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
## See Also

+ [PHP RFC: Negative String Offsets](https://wiki.php.net/rfc/negative-string-offsets)
+ [PHP: substr - Manual](https://www.php.net/manual/en/function.substr.php)
+ [PHP: ArrayAccess - Manual](https://www.php.net/manual/en/class.arrayaccess.php)

## Related

+ [Array, []](array.html)
+ [String](string.html)
+ [Index For Arrays](index-array.html)
