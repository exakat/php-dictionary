# Iffectation
An iffection is both an assignation and a condition at the same time. 

Assignation is a condition is debated. It makes the code less readable, as the assignation is hidden in the if condition.

It also saves some extra lines of code, when the condition applies to something that will immediately be used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iffectation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iffectation.html","name":"Iffectation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An iffection is both an assignation and a condition at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Iffectation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Iffectation"}]}]}</script>
```php
<?php

if ($x = foo()) { }

// same, without the iffectation
$x = foo();
if ($x) { }


?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.if.php)**
## Related

+ [Condition](condition.html)
+ [Assignations](assignation.html)
+ [If Then Else](if-then.html)
+ [Short Assignations](short-assignation.html)
