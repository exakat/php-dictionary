# Isset
``isset()`` is a function that determines if a variable is declared and is different than ``null``.

``isset()`` is also related to the magic method ``__isset()``, which is used to determine if a property in an object exists or not. 

``isset()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.

``isset()`` may be compared to ``array_key_exists()`` to check if an index exists in an array. As a micro-optimisation, it is faster than the function.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/isset.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/isset.ini.html","name":"Isset","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``isset()`` is a function that determines if a variable is declared and is different than ``null``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Isset.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $var = 'something';
    
    if (isset($var)) {
        echo 'The variable $var contains '.$var;
    } else {
        echo 'No such variable as $var';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.isset.php)**
## See Also

+ [isset vs empty vs is_null](https://phppot.com/php/isset-vs-empty-vs-is_null/)
+ [isset(), empty() And the Magic Methods](https://php-tips.readthedocs.io/en/latest/tips/isset-empty-valued.html)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_isset() Method](__isset.ini.html)
+ [array\_key\_exists()](array_key_exists.ini.html)
+ [Empty](empty.ini.html)
+ [Existence](existence.ini.html)
