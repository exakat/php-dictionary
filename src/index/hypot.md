# hypot()
``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides.

``hypot()`` is the same as calculating ``sqrt(pow($a, 2) + pow($b, 2))`` or ``sqrt($a ** 2 + $b ** 2)``. It is also the length of a segment from the origin to a point of coordinates ``($a, $b)``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hypot.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hypot.html","name":"hypot()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:50:47 +0000","dateModified":"Thu, 06 Aug 2026 05:50:47 +0000","description":"``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hypot().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $x = 3;
    $y = 4;
    var_dump(hypot($x, $y));

?>
```

**[Documentation](https://www.php.net/manual/en/function.hypot.php)**
## See Also

+ [Pythagorean theorem](https://en.wikipedia.org/wiki/Pythagorean_theorem)

## Related

+ [Exponent](power.ini.html)
+ [sqrt()](sqrt.ini.html)
