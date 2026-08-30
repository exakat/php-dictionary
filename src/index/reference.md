# References
References allow creating multiple variables that refer to the same underlying value in memory. When using references, any changes made by one variable affect the others that reference the same value. This may be useful in certain situations, such as when it is important to avoid copying large amounts of data or when it is needed to modify the original value through multiple variables. PHP optimizes the transfer of data by postponing duplication of data until they are actually modified: there is no need to use references with readonly data.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html","name":"References","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:45:15 +0000","dateModified":"Tue, 11 Aug 2026 08:45:15 +0000","description":"References allow creating multiple variables that refer to the same underlying value in memory","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"]}],"keywords":["parameter","alias"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/weak-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dangling-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursive-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/circular-reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pointer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_fill.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/footgun.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linear-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.references.php"},{"@type":"CreativeWork","name":"PHP References: How They Work, and When to Use Them","url":"https:\/\/www.elated.com\/php-references\/"},{"@type":"CreativeWork","name":"PHP Spotting References","url":"https:\/\/www.tutorialspoint.com\/php-spotting-references"},{"@type":"CreativeWork","name":"References in PHP","url":"https:\/\/erikpoehler.com\/2023\/01\/15\/references-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reference"}]}]}</script>
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

+ [Variables](variable.html)
+ [Weak References](weak-reference.html)
+ [Alias](alias.html)
+ [Dangling Reference](dangling-reference.html)
+ [Garbage Collection](garbage-collection.html)
+ [Recursive Array](recursive-array.html)
+ [Self-reference](self-reference.html)
+ [Circular Reference](circular-reference.html)
+ [Clone](clone.html)
+ [Pointer](pointer.html)
+ [array\_fill()](array_fill.html)
+ [Assignment](assignment.html)
+ [Footgun](footgun.html)
+ [Linear Type](linear-type.html)
