# OutOfRangeException
``OutOfRangeException`` is a built-in exception class that is used to indicate that an index or value is outside the acceptable range. It is a subclass of the LogicException class.

The ``OutOfRangeException`` is typically thrown when accessing an array or collection with an index that is either negative or exceeds the valid range of indices. It can also be thrown when working with iterators or other data structures that have a defined range of valid values.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outofrangeexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outofrangeexception.html","name":"OutOfRangeException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:25:12 +0000","dateModified":"Sat, 15 Aug 2026 08:25:12 +0000","description":"OutOfRangeException is a built-in exception class that is used to indicate that an index or value is outside the acceptable range","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/OutOfRangeException.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.outofrangeexception.php"},{"@type":"CreativeWork","name":"PHP: SPL Exceptions","url":"https:\/\/www.php.net\/manual\/en\/spl.exceptions.php"},{"@type":"CreativeWork","name":"How to use built-in SPL exception classes for better error handling","url":"https:\/\/codeutopia.net\/blog\/2011\/05\/06\/how-to-use-built-in-spl-exception-classes-for-better-error-handling\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"outofrangeexception"}]}]}</script>
```php
<?php

    $list = new SplDoublyLinkedList();
    
    try {
        // Adding 5 at index 2, while it should be added a 0 (empty list)
        $list->add(2,5);
    } catch (OutOfRangeException $e) {
        echo 'Exception: '.$e->getMessage()."\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.outofrangeexception.php)**
## See Also

+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)
+ [How to use built-in SPL exception classes for better error handling](https://codeutopia.net/blog/2011/05/06/how-to-use-built-in-spl-exception-classes-for-better-error-handling/)

## Related

+ [Exception](exception.html)
+ [LogicException](logicexception.html)
