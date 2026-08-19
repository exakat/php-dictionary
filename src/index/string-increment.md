# String Increment
String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings. 

These strings last character's ASCII code is incremented by one, with possible extension of the string when the letters reach ``z`` and ``Z``. 

This feature, when based on ``++`` is deprecated, and shall be removed in version 9. It has been replaced by the ``str_increment()`` function, which has the same feature, though not implicit in the engine anymore. It is also extended with It has been replaced by the ``str_decrement()``.

A deprecation message is active since PHP 8.3.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-increment.html","name":"String Increment","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:19:50 +0000","dateModified":"Mon, 06 Jul 2026 10:19:50 +0000","description":"String increment is the PHP feature that applies the ++ pre- and post-increment operators on non-numeric strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/String Increment.html"]}],"keywords":["feature","trick","so-php","easter-egg"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ascii.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deprecation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"},{"@type":"CreativeWork","name":"str_decrement","url":"https:\/\/www.php.net\/manual\/en\/function.str-decrement.php"},{"@type":"CreativeWork","name":"str_increment","url":"https:\/\/www.php.net\/manual\/en\/function.str-increment.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"string-increment"}]}]}</script>
```php
<?php

    $s = 'y';
    echo ++$s; // z
    echo ++$s; // aa 
    echo ++$s; // ab
    
    $s = 'Y';
    echo ++$s; // Z
    echo ++$s; // AA
    echo ++$s; // AA

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.increment.php)**
## See Also

+ [str_decrement](https://www.php.net/manual/en/function.str-decrement.php)
+ [str_increment](https://www.php.net/manual/en/function.str-increment.php)

## Related

+ [Increment](increment.html)
+ [String](string.html)
+ [American Standard Code for Information Interchange (ASCII)](ascii.html)
+ [Type Juggling](type-juggling.html)
+ [Deprecation](deprecation.html)
