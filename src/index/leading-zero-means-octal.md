# Leading Zero Means Octal
PHP integer syntax has some special formats for binary, octal and hexadecimal formats. In particular, an integer starting with 0 is in octal format. This leads to easy confusion, as the leading 0 is considered neutral.

A new notation with an 0 was introduced in version 8.0: it makes the octal format just as explicit as the binary or the hexadecimal one. 

Octal numbers are mainly used with the ``mkdir()`` function, and special math domains.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-zero-means-octal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-zero-means-octal.html","name":"Leading Zero Means Octal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:41:04 +0000","dateModified":"Tue, 11 Aug 2026 08:41:04 +0000","description":"PHP integer syntax has some special formats for binary, octal and hexadecimal formats","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Leading Zero Means Octal.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"leading-zero-means-octal"}]}]}</script>
```php
<?php

    echo 017; // displays 15
    echo 0o17; // displays 15
    
    echo 17; // displays 17
    
    echo 0x17; // displays 23 (hexadecimal format)

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## See Also

+ [PHP 8.1: Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)

## Related

+ [integer](integer.html)
+ [Octal Integer](octal-integer.html)
+ [Numeric Base](numeric-base.html)
+ [Format](format.html)
