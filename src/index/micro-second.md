# Micro-second
Micro-seconds are one thousandth of a second. They are accessible in different ways: 

+ ``Datetime`` and ``DateTimeImmutable`` objects, for dates
+ ``microtime()`` for dates
+ ``hrtime()`` for intervals

Do not use ``date()`` to get micro-seconds, as the function always returns 0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-second.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/micro-second.html","name":"Micro-second","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:07:10 +0000","dateModified":"Mon, 20 Jul 2026 17:07:10 +0000","description":"Micro-seconds are one thousandth of a second","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Micro-second.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"micro-second"}]}]}</script>
```php
<?php

$ms = (new Datetime()->format('u'));

$ms = microtime(true);

?>
```

**[Documentation](https://www.php.net/manual/en/function.microtime.php)**
## Related

+ [microtime()](microtime.html)
+ [hrtime()](hrtime.html)
+ [DateTime](datetime.html)
+ [DateTime](datetimeimmutable.html)
