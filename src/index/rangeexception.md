# RangeException
The RangeException exception is thrown if a value is out of range. It usually means that a values overflows or underflows.

RangeException are defined by the SPL extension. It is use by the SplStack class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rangeexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rangeexception.html","name":"RangeException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The RangeException exception is thrown if a value is out of range","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/RangeException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    try {
        $var = new SplStack();
        $var->offsetSet(100,new DateTime('2000-01-01'));
    } catch(OutOfRangeException $e) {
        print $e->getMessage() . \n; 
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.rangeexception.php)**
## Related

+ [Exception](exception.ini.html)
+ [Overflow](overflow.ini.html)
+ [Underflow](underflow.ini.html)
+ [DomainException](domainexception.ini.html)
