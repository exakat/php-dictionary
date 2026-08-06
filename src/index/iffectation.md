# Iffectation
An iffection is both an assignation and a condition at the same time. 

Assignation is a condition is debated. It makes the code less readable, as the assignation is hidden in the if condition.

It also saves some extra lines of code, when the condition applies to something that will immediately be used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iffectation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iffectation.html","name":"Iffectation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:16 +0000","dateModified":"Fri, 19 Jun 2026 21:24:16 +0000","description":"An iffection is both an assignation and a condition at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Iffectation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Condition](condition.ini.html)
+ [Assignations](assignation.ini.html)
+ [If Then Else](if-then.ini.html)
+ [Short Assignations](short-assignation.ini.html)
