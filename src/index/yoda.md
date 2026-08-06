# Yoda Condition
Yoda condition is a way to write condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yoda.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/yoda.html","name":"Yoda Condition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Yoda condition is a way to write condition by using any literal value on the left, instead of the right","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Yoda Condition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Yoda condition
    if (0 == $a) {}
    
    // Assignation, instead of comparison and bug
    if ($a = 0) {}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Yoda_conditions)**
## See Also

+ [Why using Yoda conditions you should probably not be](https://dev.to/greg0ire/why-using-yoda-conditions-you-should-probably-not)
+ [Rule yoda_style](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html)

## Related

+ [Coding Conventions](coding-convention.ini.html)
+ [Pattern](pattern.ini.html)
+ [Condition](condition.ini.html)
+ [Explicit Boolean Comparison](explicit-boolean-comparison.ini.html)
