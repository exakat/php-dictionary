# Iterable
Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface. This is equivalent to the type ``array|Traversable``, as one keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iterable.ini.html","name":"Iterable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Iterable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $value) {
        // ...
    } 
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.iterable.php)**
## See Also

+ [Master PHP Iterables: Arrays, Objects, Traversable Interface](https://flatcoding.com/tutorials/php/the-essential-guide-for-php-iterable/)
+ [PHP Iterators for walking through data structures – FastTips](https://inspector.dev/php-iterators-for-walking-through-data-structures-fasttips/)

## Related

+ [Traversable](traversable.ini.html)
+ [Array, []](array.ini.html)
+ [Pseudo-type](pseudotype.ini.html)
+ [count()](count.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Pseudo-type](pseudo-type.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [ArrayAccess](arrayaccess.ini.html)
