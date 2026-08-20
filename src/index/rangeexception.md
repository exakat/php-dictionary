# RangeException
The RangeException exception is thrown if a value is out of range. It usually means that a values overflows or underflows.

RangeException is defined by the SPL extension. It is used by the SplStack class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rangeexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rangeexception.html","name":"RangeException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:11:04 +0000","dateModified":"Fri, 14 Aug 2026 08:11:04 +0000","description":"The RangeException exception is thrown if a value is out of range","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RangeException.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domainexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.rangeexception.php"},{"@type":"CreativeWork","name":"SplStack","url":"https:\/\/www.php.net\/manual\/en\/class.splstack.php"},{"@type":"CreativeWork","name":"OutOfRangeException","url":"https:\/\/www.php.net\/manual\/en\/class.outofrangeexception.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rangeexception"}]}]}</script>
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
## See Also

+ [SplStack](https://www.php.net/manual/en/class.splstack.php)
+ [OutOfRangeException](https://www.php.net/manual/en/class.outofrangeexception.php)

## Related

+ [Exception](exception.html)
+ [Overflow](overflow.html)
+ [Underflow](underflow.html)
+ [DomainException](domainexception.html)
