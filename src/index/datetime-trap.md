# Datetime Trap
When using ``Datetime`` objects, be aware that methods that return the modified date are actually returning the object itself. This means that calculating a difference with ``diff()``, ``add()``, ``modify()`` methods also changes the underlying object. 

This trap is also set in packages that are built on top of ``Datetime``.

To avoid this trap, use the ``DatetimeImmutable`` class. This class is not modified by those methods, but returns a new object every time.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html","name":"Datetime Trap","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 07:46:56 +0000","dateModified":"Mon, 17 Aug 2026 07:46:56 +0000","description":"When using Datetime objects, be aware that methods that return the modified date are actually returning the object itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime-trap.html"]}],"keywords":["classic bug","date"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/date.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/days-in-month.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/datetime"},{"@type":"CreativeWork","name":"I just fell into the Date Trap in PHP","url":"https:\/\/twitter.com\/CodeWithKyrian\/status\/1727832972303143151"},{"@type":"CreativeWork","name":"PHP DateTime difference \u2013 it\u2019s a trap!","url":"https:\/\/aiocollective.com\/blog\/php-datetime-difference-trap\/"},{"@type":"CreativeWork","name":"What\u2019s all this \u201cimmutable date\u201d stuff, anyway?","url":"https:\/\/medium.com\/@codebyjeff\/whats-all-this-immutable-date-stuff-anyway-72d4130af8ce"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datetime-trap"}]}]}</script>
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
