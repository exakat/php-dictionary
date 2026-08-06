# Fossilized Methods
A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code.

The easiest solution to this situation is to refrain from updating the signature anymore. At that point, the method is fossilized.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fossilized-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fossilized-method.html","name":"Fossilized Methods","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fossilized Methods.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    function foo(A $a) : array {}
}

class y1 extends x {
    function foo(A $a) : array {}
}

class y2 extends x {
    function foo(A $a) : array {}
}

// Updating this method means updating y2, y1, x... 
class yN extends x {
    function foo(A $a) : array {}
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Technical_debt)**
## See Also

+ [Method fossilisation](https://www.exakat.io/en/method-fossilisation/)

## Related

+ [Method](method.ini.html)
