# Array Spread
Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own element, as if each element was spread from the array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-spread.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array-spread.html","name":"Array Spread","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Array spread is the ellipsis operator, applied to an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array Spread.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = [1,2,3];
$b = [...$a, 4,5];

// $b === [1,2,3,4,5];

?>
```

**[Documentation](https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args)**
## See Also

+ [PHP Spread Operator](https://www.phptutorial.net/php-tutorial/php-spread-operator/)

## Related

+ [Ellipsis](ellipsis.ini.html)
+ [Three Dots](three-dots.ini.html)
+ [Variadic](variadic.ini.html)
