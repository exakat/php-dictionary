# Never Type
``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.

``never`` is the lowest type available. Nothing can be a sub-type of ``never`` but never can be the subtype of anything.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/never.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/never.html","name":"Never Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Never Type.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"never"}]}]}</script>
```php
<?php

function headers() : never {
    headers('Location: https://www.exakat.io/');
    die();
}

?>
```

**[Documentation](https://wiki.php.net/rfc/noreturn_type)**
## See Also

+ [The never Return Type for PHP](https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303)
+ [Using ‘never’ return type in PHP (PHP 8.1+)](https://www.slingacademy.com/article/using-never-return-type-in-php-php-81/)

## Related

+ [Type System](type.html)
+ [PHP Natives](native-type.html)
+ [Return Value](return-value.html)
+ [Special Types](special-typehint.html)
