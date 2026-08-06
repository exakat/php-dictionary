# Standalone Types
Types are standalone, as they can be use alone, in a type declaration. This is the case of almost any type of PHP, scalar, or class. The only exception used to be false and null.

``null`` needed to be associated to another type, and was not standalone. ``false`` also was introduced as a non-standalone type, where it had to be associated with another type. 

Since PHP 8.2, and 8.3 for ``true``, those types are now standalone and can be used by themselves. They are also called a 'literal type' as they define both the type and the value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/standalone-type.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/standalone-type.html","name":"Standalone Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Types are standalone, as they can be use alone, in a type declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Standalone Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo(true $t) {
        // $t can only be true
        var_dump($t);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.singleton.php)**
## See Also

+ [What's the 'true' Standalone Type in PHP?](https://www.designcise.com/web/tutorial/what-is-the-true-standalone-type-in-php)

## Related

+ [Special Types](special-type.ini.html)
+ [Type System](type.ini.html)
+ [True](true.ini.html)
+ [False](false.ini.html)
+ [Null](null.ini.html)
