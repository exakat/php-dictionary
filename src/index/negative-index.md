# Negative Index
On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string. 

Negative index was added in version 7.1.

On an array, negative indexes are supported, without any special meaning: they are only available when provided. Their behavior changed when using automatic indexing though.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/negative-index.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/negative-index.html","name":"Negative Index","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 22 Aug 2026 08:42:52 +0000","dateModified":"Sat, 22 Aug 2026 08:42:52 +0000","description":"On PHP strings, a positive index starts at zero at the beginning of the string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/negative-index.html"]}],"keywords":["string"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php#language.types.string.substr"},{"@type":"CreativeWork","name":"PHP: substr - Manual","url":"https:\/\/www.php.net\/manual\/en\/function.substr.php"},{"@type":"CreativeWork","name":"PHP RFC: Negative String Offsets","url":"https:\/\/wiki.php.net\/rfc\/negative-string-offsets"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"negative-index"}]}]}</script>
```php
<?php

    $string = 'abcd';
    
    echo $string[1]; // b
    echo $string[-1]; // c

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.substr)**
## See Also

+ [PHP: substr - Manual](https://www.php.net/manual/en/function.substr.php)
+ [PHP RFC: Negative String Offsets](https://wiki.php.net/rfc/negative-string-offsets)

## Related

+ [Index For Arrays](index-array.html)
+ [String](string.html)
