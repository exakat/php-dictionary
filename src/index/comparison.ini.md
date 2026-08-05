# Comparison
Comparison operators check how two values relate to each other. They may be equal or different, and, depending on the type of compared data, they may be greater or lesser than the other one.

PHP comparisons exists with type-juggling, ``==``, ``<>``, ``<=>``, ``switch()`` and ``!=``, and with type checks, ``match()``, ``===`` and ``!==``. They are called loose comparison, as PHP applies some cast before executing the comparison. Inequalities only exist with type-juggling. 

On the other hand, PHP has strict comparisons, which include comparing the type before running any further checks. They are ``===`` and ``!==``. 

There are also functions dedicated to comparisons, with specific applications: ``strcmp()``, ``strcasecmp()``, ``strnatcasecmp()``, ``strcoll()``, ``similar_text()``, ``levensthein()``, ``bccomp()``, ``version_compare()``, ``hash_equals()``. 

Some of the functions include a loose or a strict version.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/comparison.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/comparison.ini.html","name":"Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:09:05 +0000","dateModified":"Tue, 16 Jun 2026 15:09:05 +0000","description":"Comparison operators check how two values relate to each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if ($a == $b) {
        print 'a and b are equal';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [PHP Variable Comparison](https://phpcheatsheets.com/compare/)
+ [Difference between the (=), (==), and (===) operators in PHP](https://www.educative.io/answers/difference-between-the-and-operators-in-php)

## Related

+ [Operators](operator.ini.html)
+ [Type Juggling](type-juggling.ini.html)
+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [Spaceship Operator](spaceship.ini.html)
+ [Magic Hash](magic-hash.ini.html)
+ [Truthy](truthy.ini.html)
+ [Underscore](underscore.ini.html)
+ [zero](zero.ini.html)
+ [Identity Comparison](identity-comparison.ini.html)
+ [Relaxed Comparison](relaxed-comparison.ini.html)
+ [array\_keys()](array_keys.ini.html)
+ [Double Arrow](double-arrow.ini.html)
+ [Triple](triple.ini.html)
