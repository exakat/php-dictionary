# DateTimeInterface
``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``. It defines the common API shared by both mutable and immutable date-time objects.

Using ``DateTimeInterface`` as a type in function signatures accepts either class, making code agnostic to mutability. It cannot be implemented by user-defined classes directly; it exists solely to type both built-in date-time classes.

``DateTimeInterface`` exposes methods such as ``format()``, ``getTimestamp()``, ``getTimezone()``, and ``diff()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html","name":"DateTimeInterface","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"DateTimeInterface is a PHP interface implemented by both DateTime and DateTimeImmutable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeinterface.html"]}],"keywords":["native class","interface","date"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetimeimmutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/date.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.datetimeinterface.php"},{"@type":"CreativeWork","name":"For a Great Time, Make it a DateTime","url":"https:\/\/stevegrunwell.com\/blog\/php-datetime\/"},{"@type":"CreativeWork","name":"DateTimeImmutable","url":"https:\/\/derickrethans.nl\/immutable-datetime.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"datetimeinterface"}]}]}</script>
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
## See Also

+ [For a Great Time, Make it a DateTime](https://stevegrunwell.com/blog/php-datetime/)
+ [DateTimeImmutable](https://derickrethans.nl/immutable-datetime.html)

## Related

+ [DateTime](datetime.html)
+ [DateTime](datetimeimmutable.html)
+ [Interface](interface.html)
+ [Dates](date.html)
+ [DateInterval](dateinterval.html)
+ [PHP Native Interfaces](php-interface.html)
