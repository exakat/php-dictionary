# Logarithm
The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``. There are two logarithm functions: the natural logarithm, where ``log(M_E) == 1``, and the natural logarithm, where ``log(10) == 1``.

PHP also offers ``log1p($x) == log(1 + $x)``. This function exists because ``log($x)`` is very close to 0 when ``$x`` is close to 1. To avoid rounding errors, ``log1p()`` is dedicated to this calculations and immediately yields the decimal part of the logarithm.

The opposite function of the logarithm is exponential, ``exp()``, and the ``**`` operator. 

A logarithm is not the same as an algorithm, or a log file.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/logarithm.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/logarithm.ini.html","name":"Logarithm","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:19:11 +0000","dateModified":"Tue, 07 Jul 2026 05:19:11 +0000","description":"The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Logarithm.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo log(M_E);
    print PHP_EOL;  // 1
    
    echo log(1); 
    print PHP_EOL;  // 0
    
    echo log(1.001); 
    print PHP_EOL;  // 0.00099950033308342
    
    echo log1p(0.001); //0.00099950033308353
    print PHP_EOL;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Logarithm)**
## See Also

+ [PHP Math Functions: A Comprehensive Guide with Examples](https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/)

## Related

+ [Algorithm](algorithm.ini.html)
+ [Exponential](exponential.ini.html)
+ [Exponent](power.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [zero](zero.ini.html)
+ [one](one.ini.html)
+ [Log File](log-file.ini.html)
+ [E](e.ini.html)
+ [Log](log.ini.html)
