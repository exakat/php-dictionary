# Yoda Condition
Yoda condition is a way to write condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yoda.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yoda.html","name":"Yoda Condition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Yoda condition is a way to write condition by using any literal value on the left, instead of the right","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Yoda Condition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Yoda Condition"}]}]}</script>
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

+ [Coding Conventions](coding-convention.html)
+ [Pattern](pattern.html)
+ [Condition](condition.html)
+ [Explicit Boolean Comparison](explicit-boolean-comparison.html)
