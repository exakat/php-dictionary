# Octal Integer
Integers can be specified in octal, or base 8, notation. Octal integer syntax starts with ``0o``, zero-o, and only contains digits from 0 to 7.

Initially, octal integers were formatted by simply starting with a initial 0. This features is still available, yet should be replaced with the less confusing syntax with ``0o``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/octal-integer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/octal-integer.html","name":"Octal Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Integers can be specified in octal, or base 8, notation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Octal Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"octal-integer"}]}]}</script>
```php
<?php

    // 12
    $octal = 0O14;
    $octal = 014;

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## See Also

+ [PHP 8.1: Explicit Octal numeral notation](https://php.watch/versions/8.1/explicit-octal-notation)

## Related

+ [integer](integer.html)
+ [Binary Integer](binary-integer.html)
+ [Hexadecimal Integer](hexadecimal-integer.html)
+ [Leading Zero Means Octal](leading-zero-means-octal.html)
