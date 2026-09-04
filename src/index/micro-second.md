# Micro-second
Micro-seconds are one thousandth of a second. They are accessible in different ways: 

+ ``Datetime`` and ``DateTimeImmutable`` objects, for dates
+ ``microtime()`` for dates
+ ``hrtime()`` for intervals

Do not use ``date()`` to get micro-seconds, as the function always returns 0.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-second.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-second.html","name":"Micro-second","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 06:21:35 +0000","dateModified":"Tue, 01 Sep 2026 06:21:35 +0000","description":"Micro-seconds are one thousandth of a second","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-second.html"]}],"alternateName":["microsecond"],"keywords":["micro","time"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hrtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.microtime.php"},{"@type":"CreativeWork","name":"PHP | microtime() Function","url":"https:\/\/www.geeksforgeeks.org\/php\/php-microtime-function\/"},{"@type":"CreativeWork","name":"A Comprehensive Guide to PHP's time() and microtime() Functions","url":"https:\/\/reintech.io\/blog\/comprehensive-guide-php-time-microtime-functions"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"micro-second"}]}]}</script>
```php
<?php

$ms = (new Datetime()->format('u'));

$ms = microtime(true);

?>
```

**[Documentation](https://www.php.net/manual/en/function.microtime.php)**
## See Also

+ [PHP | microtime() Function](https://www.geeksforgeeks.org/php/php-microtime-function/)
+ [A Comprehensive Guide to PHP's time() and microtime() Functions](https://reintech.io/blog/comprehensive-guide-php-time-microtime-functions)

## Related

+ [microtime()](microtime.html)
+ [hrtime()](hrtime.html)
+ [DateTime](datetime.html)
