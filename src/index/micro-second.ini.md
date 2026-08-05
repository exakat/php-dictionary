# Micro-second
Micro-seconds are one thousandth of a second. They are accessible in different ways: 

+ ``Datetime`` and ``DateTimeImmutable`` objects, for dates
+ ``microtime()`` for dates
+ ``hrtime()`` for intervals

Do not use ``date()`` to get micro-seconds, as the function always returns 0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/micro-second.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/micro-second.ini.html","name":"Micro-second","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:07:10 +0000","dateModified":"Mon, 20 Jul 2026 17:07:10 +0000","description":"Micro-seconds are one thousandth of a second","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Micro-second.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$ms = (new Datetime()->format('u'));

$ms = microtime(true);

?>
```

**[Documentation](https://www.php.net/manual/en/function.microtime.php)**
## Related

+ [microtime()](microtime.ini.html)
+ [hrtime()](hrtime.ini.html)
+ [DateTime](datetime.ini.html)
+ [DateTime](datetimeimmutable.ini.html)
