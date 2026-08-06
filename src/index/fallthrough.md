# Switch Fallthrough
A fallthrough is the absence of break, or equivalent, at the end of a switch case. That way, the execution continues on the next case. 

While this is an intended feature, and is useful to reduce code, it tends to surprise programmers, who expect the cases to always end.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fallthrough.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fallthrough.html","name":"Switch Fallthrough","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A fallthrough is the absence of break, or equivalent, at the end of a switch case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Switch Fallthrough.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

switch ($a) {
    case 1:
        $a = 2 * $a;
        // fallthrough here : the execution continues
        
    case 2:
        $a = $a + 1;
        break;
}

?>
```

**[Documentation](https://www.learncpp.com/cpp-tutorial/switch-fallthrough-and-scoping/)**
## See Also

+ [PHP switch Statement](https://www.codeguage.com/courses/php/control-flow-switch)

## Related

+ [Match](match.ini.html)
