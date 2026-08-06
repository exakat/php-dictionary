# Non-numeric
A non-numeric string is a string that can't be converted to a number without difficult choices.

When forced to a number, such string emits a warning, unless hidden with cast or noscream ``@`` operator.

A string may be only constituted of digits, from 0 to 9. It might be converted to a float or to ``INF``, depending on its size. In arrays, when used as an index, a very long string is kept as a string, and it is not converted to integer.

A string may be considered as ``is_numeric()`` when it is build with digits, whatever its size. In fact, when such a string is converted to float, it might go beyond the largest PHP float, and become ``INF``: this constant is of type ``float``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/non-numeric.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/non-numeric.html","name":"Non-numeric","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:47 +0000","dateModified":"Fri, 19 Jun 2026 21:25:47 +0000","description":"A non-numeric string is a string that can't be converted to a number without difficult choices","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Non-numeric.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $string = '123';
    $integer = (int) $string; // 123
    
    $string = '12.3E4';
    $float = (float) $string; // 123000
    
    $nonNumeric = '12a3';
    $integer = (int) $string; // 12

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-numeric.php)**
## See Also

+ [Remove All Non-Numeric Characters from String using PHP](https://lindevs.com/code-snippets/remove-all-non-numeric-characters-from-string-using-php)

## Related

+ [@, No Scream Operator](noscream.ini.html)
+ [Cast Operator](cast.ini.html)
+ [Floating Point Numbers](float.ini.html)
+ [INF](inf.ini.html)
