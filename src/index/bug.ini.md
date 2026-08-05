# Bug
A bug is an discrepancy between the expected result of a program and its actual result. 

Bugs have many different varieties: 

+ Code does not compile
+ Program stop before complete, with a 'Fatal error'
+ Program outputs a wrong result
+ Program outputs a result different from expected
+ Program is vulnerable to security attack
+ Poor performance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bug.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bug.ini.html","name":"Bug","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:36 +0000","dateModified":"Fri, 19 Jun 2026 21:25:36 +0000","description":"A bug is an discrepancy between the expected result of a program and its actual result","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Bug.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Linting](linting.ini.html)
+ [Strpos() Syndrome](strpos-syndrom.ini.html)
