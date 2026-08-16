# DateTimeInterface
``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``. It defines the common API shared by both mutable and immutable date-time objects.

Using ``DateTimeInterface`` as a type in function signatures accepts either class, making code agnostic to mutability. It cannot be implemented by user-defined classes directly; it exists solely to type both built-in date-time classes.

``DateTimeInterface`` exposes methods such as ``format()``, ``getTimestamp()``, ``getTimezone()``, and ``diff()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html","name":"DateTimeInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:58:00 +0000","dateModified":"Thu, 06 Aug 2026 05:58:00 +0000","description":"DateTimeInterface is a PHP interface implemented by both DateTime and DateTimeImmutable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DateTimeInterface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datetimeinterface"}]}]}</script>
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

+ [DateTime](datetime.html)
+ [DateTime](datetimeimmutable.html)
+ [Interface](interface.html)
+ [Dates](date.html)
+ [DateInterval](dateinterval.html)
+ [PHP Native Interfaces](php-interface.html)
