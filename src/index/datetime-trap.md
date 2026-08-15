# Datetime Trap
When using ``Datetime`` objects, be aware that methods that return the modified date are actually returning the object itself. This means that calculating a difference with ``diff()``, ``add()``, ``modify()`` methods also changes the underlying object. 

This trap is also set in packages that are built on top of Datetime.

To avoid this trap, use the ``DatetimeImmutable`` class. This class is not modified by those methods, but returns a new object every time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html","name":"Datetime Trap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:25 +0000","dateModified":"Tue, 11 Aug 2026 20:59:25 +0000","description":"When using Datetime objects, be aware that methods that return the modified date are actually returning the object itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Datetime Trap.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datetime-trap"}]}]}</script>
```php
<?php

    $today = new Datetime('now');
    print $today->format('d-m-Y').PHP_EOL;
    // for example, 24-11-2026
    
    $tomorrow = $today->add(new DateInterval('P1D'));
    print $tomorrow->format('d-m-Y').PHP_EOL;
    // 25-11-2026 (as expected)
    
    $twoDaysLater = $today->add(new DateInterval('P2D'));
    print $twoDaysLater->format('d-m-Y');
    // 27-11-2026 (one day overshoot!)

?>
```

**[Documentation](https://www.php.net/datetime)**
## See Also

+ [I just fell into the Date Trap in PHP](https://twitter.com/CodeWithKyrian/status/1727832972303143151)
+ [PHP DateTime difference – it’s a trap!](https://aiocollective.com/blog/php-datetime-difference-trap/)
+ [What’s all this “immutable date” stuff, anyway?](https://medium.com/@codebyjeff/whats-all-this-immutable-date-stuff-anyway-72d4130af8ce)

## Related

+ [DateTime](datetime.html)
+ [DateInterval](dateinterval.html)
+ [Dates](date.html)
+ [Days In Month](days-in-month.html)
