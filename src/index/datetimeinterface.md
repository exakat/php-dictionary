# DateTimeInterface
``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``. It defines the common API shared by both mutable and immutable date-time objects.

Using ``DateTimeInterface`` as a type in function signatures accepts either class, making code agnostic to mutability. It cannot be implemented by user-defined classes directly; it exists solely to type both built-in date-time classes.

``DateTimeInterface`` exposes methods such as ``format()``, ``getTimestamp()``, ``getTimezone()``, and ``diff()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datetimeinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/datetimeinterface.html","name":"DateTimeInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:58:00 +0000","dateModified":"Thu, 06 Aug 2026 05:58:00 +0000","description":"``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DateTimeInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function formatDate(DateTimeInterface $date): string {
        return $date->format('Y-m-d');
    }
    
    // both classes satisfy the type
    echo formatDate(new DateTime('2024-01-15'));
    echo formatDate(new DateTimeImmutable('2024-06-03'));

?>
```

**[Documentation](https://www.php.net/manual/en/class.datetimeinterface.php)**
## Related

+ [DateTime](datetime.ini.html)
+ [DateTime](datetimeimmutable.ini.html)
+ [Interface](interface.ini.html)
+ [Dates](date.ini.html)
+ [DateInterval](dateinterval.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
