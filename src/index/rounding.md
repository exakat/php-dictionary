# Rounding
Rounding refers to the process of adjusting numerical values to a certain degree of precision. Most often, it means turning a float number into an integer, although there are rounding in various scales: rounding floats to 2 digits after the decimal separator; rounding to the nearest power of 10; rounding to the next unit, like Mb. 

Rounding has several techniques: that needs to be consistent across applications: rounding to the next integer; to the previous integer; truncating; rounding to the nearest even number; flooring or ceiling; etc.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rounding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rounding.html","name":"Rounding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:42 +0000","dateModified":"Fri, 19 Jun 2026 21:30:42 +0000","description":"Rounding refers to the process of adjusting numerical values to a certain degree of precision","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Rounding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$pi = M_PI;

print round($pi, 0); // 3

?>
```

**[Documentation](https://www.php.net/manual/en/function.round.php)**
## See Also

+ [Up and Down Round values in PHP: ceil, floor and round functions: The ultimate tutorial 2024](https://nestify.io/blog/up-down-round-values-in-php-ceil-floor-functions/)

## Related

+ [Math](math.ini.html)
+ [integer](integer.ini.html)
+ [Floating Point Numbers](decimal.ini.html)
+ [Real Numbers](real.ini.html)
