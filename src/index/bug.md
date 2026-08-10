# Bug
A bug is an discrepancy between the expected result of a program and its actual result. 

Bugs have many different varieties: 

+ Code does not compile
+ Program stop before complete, with a 'Fatal error'
+ Program outputs a wrong result
+ Program outputs a result different from expected
+ Program is vulnerable to security attack
+ Poor performance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bug.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bug.html","name":"Bug","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:36 +0000","dateModified":"Fri, 19 Jun 2026 21:25:36 +0000","description":"A bug is an discrepancy between the expected result of a program and its actual result","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Bug.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Bug"}]}]}</script>
```php
<?php

// a case of syntax error
// echo hello world; 

echo -3 ** 2; // known bug

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Software_bug)**
## See Also

+ [Modern PHP Security Part 1: bug classes](https://labs.detectify.com/security-guidance/modern-php-security-part-1-bug-classes/)

## Related

+ [Linting](linting.html)
+ [Strpos() Syndrome](strpos-syndrom.html)
