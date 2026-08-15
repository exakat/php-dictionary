# Array Spread
Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own elements, as if each element was spread from the array.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-spread.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-spread.html","name":"Array Spread","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:12 +0000","dateModified":"Tue, 11 Aug 2026 21:00:12 +0000","description":"Array spread is the ellipsis operator, applied to an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Spread.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-spread"}]}]}</script>
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

+ [Ellipsis](ellipsis.html)
+ [Three Dots](three-dots.html)
+ [Variadic](variadic.html)
