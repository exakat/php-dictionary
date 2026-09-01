# Yoda Condition
Yoda condition is a way to write a condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yoda.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yoda.html","name":"Yoda Condition","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:40:29 +0000","dateModified":"Tue, 11 Aug 2026 14:40:29 +0000","description":"Yoda condition is a way to write a condition by using any literal value on the left, instead of the right","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yoda.html"]}],"alternateName":["yoda-condition"],"keywords":["coding convention","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coding-convention.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explicit-boolean-comparison.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Yoda_conditions"},{"@type":"CreativeWork","name":"Why using Yoda conditions you should probably not be","url":"https:\/\/dev.to\/greg0ire\/why-using-yoda-conditions-you-should-probably-not"},{"@type":"CreativeWork","name":"Rule yoda_style","url":"https:\/\/cs.symfony.com\/doc\/rules\/control_structure\/yoda_style.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"yoda"}]}]}</script>
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
