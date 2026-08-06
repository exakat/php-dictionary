# Exponential
The exponential is a mathematical function. It satisfies the expressions: ``exp($a + $b) = exp($a) * exp($b)``, and ``exp(0) === 1``.

There is a special ``expm1()`` function, which calculates the exponential value of ``$x - 1``. When ``$x`` is close to 0, this function provides more siginficant digits than using the expression ``exp($x) - 1``.

Exponential calculations may also be lead with the constant ``M_E`` and the operator ``**`` or the function ``pow()``, although there is a slight difference.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/exponential.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/exponential.html","name":"Exponential","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The exponential is a mathematical function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Exponential.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $e = exp(1); // also known as the contant M_E
    
    var_dump(exp(2) === M_E ** 2); // false
    var_dump(exp(2) - M_E ** 2);   // float(8.881784197001252E-16)

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Exponential_function)**
## See Also

+ [PHP Math Functions: A Comprehensive Guide with Examples](https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/)

## Related

+ [Exponent](**.ini.html)
+ [Exponent](pow.ini.html)
+ [E](e.ini.html)
+ [Logarithm](logarithm.ini.html)
+ [sqrt()](sqrt.ini.html)
+ [Star \*](star.ini.html)
