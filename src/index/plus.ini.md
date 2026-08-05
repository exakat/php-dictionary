# Plus +
``+`` is a native PHP operator, which has three usages: 

+ The addition, as in mathematics, on numbers. This works on integers and floats.
+ The merging of arrays. This merge sets the keys once, then omits the next values. This is distinct from ``array_merge()``.
+ The + sign in front of a number, to make it explicitly positive. This is optional, and may be repeated.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/plus.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/plus.ini.html","name":"Plus +","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``+`` is a native PHP operator, which has three usages: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Plus +.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1 + 2; // 3
    
    $b = [1, 2] + [3, 4, 5]; // [1,2, 5]
    
    $c = +6; // 6 

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.arithmetic.php)**
## See Also

+ [Another cast to int](https://php-tips.readthedocs.io/en/latest/tips/cast_to_int.html)

## Related

+ [array\_merge()](array_merge.ini.html)
+ [Sign](sign.ini.html)
+ [Addition](addition.ini.html)
+ [Minus -](minus.ini.html)
