# Number
A number is either a float or an integer. 

Numbers are always signed. They are limited, in range, by the constants ``PHP_INT_MAX``, ``PHP_INT_MIN``, and ``PHP_FLOAT_MAX``, ``PHP_FLOAT_MIN``.

PHP also has a concept of numeric strings, which are strings that hold numbers. Other types do not have direct conversion to numbers and need to be converted or cast.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/number.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/number.html","name":"Number","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A number is either a float or an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Number.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo 1;
    echo -1.5;
    
    echo PHP_INT_MAX; 

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.php)**
## See Also

+ [PHP Numbers Basics](https://www.codeguage.com/v1/courses/php/numbers-basics)
+ [PHP Numbers Explained](https://www.pixemweb.com/php/php-numbers/)
+ [Exploring Number Manipulation in PHP](https://medium.com/@philippebeck/exploring-number-manipulation-in-php-e51c85b44630)

## Related

+ [Floating Point Numbers](float.ini.html)
+ [integer](integer.ini.html)
+ [Numeric String](numeric-string.ini.html)
+ [Cast Operator](cast.ini.html)
+ [abs()](abs.ini.html)
