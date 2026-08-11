# Binary Not Operator
The tilde ``~`` operator return the opposite value, bit by by. The value is first converted to an integer, then, negated. This operator returns an integer.

``~`` is often confused with ``!``, as some usage quite overlap. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-not.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-not.html","name":"Binary Not Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:06:53 +0000","dateModified":"Mon, 10 Aug 2026 17:06:53 +0000","description":"The tilde ``~`` operator return the opposite value, bit by by","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Binary Not Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"binary-not"}]}]}</script>
```php
<?php

    $a = 3;     // 3 
    $b = ~$a;   // -4
    $c = !$a;   // false

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.bitwise.php)**
## See Also

+ [PHP Tilde Operator (~): Understanding Its Function and Why ~$a Returns -($a + 1)](https://www.w3tutorials.net/blog/what-s-the-function-of-the-bitwise-operator-tilde/)

## Related

+ [Not Operator](not.html)
+ [Tilde ~](tilde.html)
