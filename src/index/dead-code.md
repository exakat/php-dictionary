# Dead Code
Dead code refers to sections of code that are no longer executed or reachable during the program's execution. It includes any lines or blocks of code that do not contribute to the program's functionality or produce any observable results. Dead code can be the result of code modifications, changes in requirements, or mistakes during development.

Dead code is also known as unused code. It happens to any defined structure. Variables, methods, functions, classes, interfaces, etc..
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dead-code.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dead-code.html","name":"Dead Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Dead code refers to sections of code that are no longer executed or reachable during the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dead Code.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dead-code"}]}]}</script>
```php
<?php

    // bar is dead code : never executed
    function bar() { echo 'World'; }
    
    // foo() is alive code : it is executed
    function foo() { echo 'Hello'; }

    echo foo();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dead_code)**
## See Also

+ [Delete unused code (and how to retrieve it)](https://understandlegacycode.com/blog/delete-unused-code/)
+ [The Art of Code Deletion: Why Removing Code Makes You a Better Developer](https://dev.to/adamgolan/the-art-of-code-deletion-why-removing-code-makes-you-a-better-developer-3cm)
+ [Unused code detector — How to make your PHP code cleaner](https://medium.com/@pogulailo/unused-code-detector-how-to-make-your-php-code-cleaner-50e6f5cb4109)

## Related

+ [Zombie Code](zombie-code.html)
+ [Analysis](analysis.html)
+ [Habit](habit.html)
+ [Legacy](legacy.html)
+ [Unreachable Code](unreachable-code.html)

## Related packages

+ [scheb/tombstone](https://packagist.org/packages/scheb/tombstone)
