# Iterable
Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface. This is equivalent to the type ``array|Traversable``, as one keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterable.html","name":"Iterable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Iterable is a pseudo-type, which accepts any array or object implementing the ``Traversable`` interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Iterable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"iterable"}]}]}</script>
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

+ [Traversable](traversable.html)
+ [Array, []](array.html)
+ [Pseudo-type](pseudotype.html)
+ [count()](count.html)
+ [PHP Natives](native-type.html)
+ [Pseudo-type](pseudo-type.html)
+ [Special Types](special-typehint.html)
+ [ArrayAccess](arrayaccess.html)
