# Never Type
``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop.

``never`` is the lowest type available. Nothing can be a sub-type of ``never`` but never can be the subtype of anything.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/never.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/never.html","name":"Never Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``never`` is a special return type that signals a method that never returns: it only dies, throws an exception or runs an infinite loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Never Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Type System](type.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Return Value](return-value.ini.html)
+ [Special Types](special-typehint.ini.html)
