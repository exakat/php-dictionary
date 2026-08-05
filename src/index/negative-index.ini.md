# negative-index
On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string. 

Negative index was added in version 7.1.

On an array, negative index are supported, without any special meaning: they are only available when provided. Their behavior changed when using automatic indexing though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/negative-index.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/negative-index.ini.html","name":"negative-index","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:40:36 +0000","dateModified":"Sat, 11 Jul 2026 14:40:36 +0000","description":"On PHP strings, a positive index starts at zero at the beginning of the string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/negative-index.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $string = 'abcd';
    
    echo $string[1]; // b
    echo $string[-1]; // c

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.substr)**
## Related

+ [Index For Arrays](index-array.ini.html)
+ [String](string.ini.html)
