# References
References allow creating multiple variables that refer to the same underlying value in memory. When using references, any changes made by one variable affect the others that reference the same value. This may be useful in certain situations, such as when it is important to avoid copying large amounts of data or when it is needed to modify the original value through multiple variables. PHP optimizes the transfer of data by postponing duplication of data until they are actually modified: there is no need to use references with readonly data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reference.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reference.ini.html","name":"References","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"References allow creating multiple variables that refer to the same underlying value in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/References.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = 1;

    $b = &$a; 
    $b = 2;

    echo $a;
    // displays 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.references.php)**
## See Also

+ [PHP References: How They Work, and When to Use Them](https://www.elated.com/php-references/)
+ [PHP Spotting References](https://www.tutorialspoint.com/php-spotting-references)
+ [References in PHP](https://erikpoehler.com/2023/01/15/references-in-php/)

## Related

+ [Variables](variable.ini.html)
+ [Weak References](weak-reference.ini.html)
+ [Alias](alias.ini.html)
+ [Dangling Reference](dangling-reference.ini.html)
+ [Garbage Collection](garbage-collection.ini.html)
+ [Recursive Array](recursive-array.ini.html)
+ [Self-reference](self-reference.ini.html)
+ [Circular Reference](circular-reference.ini.html)
+ [Clone](clone.ini.html)
+ [Pointer](pointer.ini.html)
